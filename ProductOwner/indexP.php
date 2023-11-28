<?php
  session_start();
	require ('../connexion.php'); 
    // echo '7d hna khdam';
    // if (!$_SESSION['authenticated']) {
    //     header('Location: index.php');
    // }
    // echo ' hadchi lla';
    // require 'connexion.php';
    // print_r($_POST);

    if (isset($_POST['submits'])) {
      $id_projet = $_POST['projet'];
      $id_utilisateur = $_POST['id']; 
      $role = 'ScrumMaster';
  
      $updateQuery = "UPDATE utilisateur
                      SET  role = '$role', projet = '$id_projet'
                      WHERE id = '$id_utilisateur'";
  
      $updateResult = mysqli_query($conn, $updateQuery);
  
      if ($updateResult) {
          header('Location: ./indexP.php');
      }
  }

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="dark:bg-gray-900">

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="./indexP.php" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="../assets/dataware-white.png" class="h-8" alt="dataware Logo" />
    </a>
    <a href="#" class="py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-lime-500 md:p-0 dark:text-white md:dark:hover:text-lime-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" >Deconnexion</a>
  <div class="items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-user">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-lime-500 md:p-0 dark:text-white md:dark:hover:text-lime-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-lime-500 md:p-0 dark:text-white md:dark:hover:text-lime-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-lime-500 md:p-0 dark:text-white md:dark:hover:text-lime-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-lime-500 md:p-0 dark:text-white md:dark:hover:text-lime-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-lime-500 md:p-0 dark:text-white md:dark:hover:text-lime-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
    
</div>
  </div>
</nav>
<section class="dark:bg-gray-900 bg-gray-50 mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24 ">
    <div class="space-y-12 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
      <h2 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">Liste des Projets de DATAWARE</h2>
    </div>
    <div class="mx-auto max-w-screen-xl p-4 lg:px-12">
        <!-- Start coding here -->
        <div class=" dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-4 flex-shrink-0">
                  <a href="ajouterProjet.php">
                    <button type="button"  class="flex items-center justify-center text-white bg-lime-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add product
                    </button>
                  </a>
                </div> 
            </div>  
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Identifiant</th>
                            <th scope="col" class="px-4 py-3">Nom</th>
                            <th scope="col" class="px-4 py-3">Description</th>
                            <th scope="col" class="px-4 py-3">Date de création</th>
                            <th scope="col" class="px-4 py-3">Date de fin</th>
                            <th scope="col" class="px-4 py-3">Statuts</th>
                            <th scope="col" class="px-4 py-3">Identifiant de Product Owner</th>
                            <th scope="col" class="px-4 py-3">Identifiant d'equipe</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM projets";
                    $result = mysqli_query($connexion, $sql);
                        while ($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?php echo $row['ID_projet']; ?></th>
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?php echo $row['nom_projet']; ?></th>
                            <td class="px-4 py-3"><?php echo $row['description']; ?></td>
                            <td class="px-4 py-3"><?php echo $row['date_creation']; ?></td>
                            <td class="px-4 py-3"><?php echo $row['date_fin']; ?></td>
                            <td class="px-4 py-3"><?php echo $row['status']; ?></td>
                            <td class="px-4 py-3"><?php echo $row['ID_productOwner']; ?></td>
                            <td class="px-4 py-3"><?php echo $row['ID_equipe']; ?></td>
                            <td class="px-4 py-3 flex items-center justify-end">
                            <a href="modifierprojet.php?modifierID=<?php echo $row['ID_projet'] ?>" class="text-gray-400 hover:text-gray-300">
                                <svg class="w-8 h-6" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <style>svg{fill:#84cc16}</style>
                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H322.8c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1H178.3zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z"/>
                                </svg>
                            </a>
                            <a href="supprimerprojet.php?supprimerID=<?php echo $row['ID_projet'] ?>" class="text-gray-400 hover:text-gray-300">
                                <svg class="w-6 h-6 m-3" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <style>svg{fill:#84cc16}</style>
                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                </svg>
                            </a>
                            </td>
                        </tr>
                        <?php
                        }

                        // Free result set
                        mysqli_free_result($result);
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">                                                                                                                                                                                     
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Assigner un Scrum Master 
                    </h1>
                    <form class="max-w-md mx-auto" method="post">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" value="<?php echo $row['nom_perso']; ?>" name="nom_perso" id="nom_perso" class=" py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-lime-500 focus:outline-none " placeholder="First name" required />
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" value="<?php echo $row['prenom_perso']; ?>" name="last_name" id="last_name" class=" py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-lime-500 focus:outline-none" placeholder="Last name" required />
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="email" value="<?php echo $row['email']; ?>" name="email" id="email" class=" py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-lime-500 focus:outline-none" placeholder="Email address" required />
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="password" value="<?php echo $row['motdepasse']; ?>" name="password" id="password" class=" py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-lime-500 focus:outline-none" placeholder="Password" required />
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="tel"  value="<?php echo $row['numero']; ?>" name="phone" id="phone" class=" py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-lime-500 focus:outline-none" placeholder="Phone number (123-456-7890)" required />
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <select type="text" value="<?php echo $row['role']; ?>" name="role" id="role" class="py-2.5 px-0 w-full text-sm text-gray-900 rounded-md border-gray-300 dark:text-gray-900 dark:border-gray-600 dark:focus:border-lime-500 focus:outline-none ">
                            <?php
                                $sql = "SELECT * FROM personnel";
                                $result1 = mysqli_query($connexion, $sql);

                                // Check if the query was successful
                                if ($result1) {
                                    while ($row = mysqli_fetch_assoc($result1)) {
                                        ?>
                                            <option>
                                            <?php echo $row['role'] ; ?>
                                            </option>
                                        <?php
                                    }
                                    // Free result set
                                    mysqli_free_result($result1);
                                } else {
                                    // Handle the error, e.g., display an error message or log the error
                                    echo "Error: " . mysqli_error($connexion);
                                }
                                ?>
                    </select>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="date" name="date_dajout" id="date_dajout" value ="<?php echo date('Y-m-d') ?>" class="py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-lime-500 focus:outline-none " />
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            

                        </div>
                        <button type="submit" name="save-btn" value="save" class="text-white bg-lime-500 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-lime-600 dark:hover:bg-lime-700 dark:focus:ring-lime-800">Submit</button>
                    </form>
                </div>  
            </div>
        </div>
    </section>

</body>
</html>