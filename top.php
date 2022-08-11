<?php
session_start();
include "database.php";
include "function.inc.php";
if ($_SESSION['IS_LOGIN'] != 'YES') { // Anonymous login through url 
    redirect('login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Folk Project</title>
</head>

<body>

    <div class="container border-bottom my-4">
        <!-- As a heading -->
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1 ">Folk</span>

            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['User'] ?>
                </a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    <a class="dropdown-item" href="folk_table.php">Folk Table</a>
                    <a class="dropdown-item" href="index.php">Folk Form</a>
                </div>

            </div>

        </nav>
    </div>