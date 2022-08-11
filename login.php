<?php
session_start();
include 'database.php';
include 'function.inc.php';
$msg ="";

if(isset($_SESSION['IS_LOGIN']) == 'YES'){ // Anonymous login through url 
    redirect('index.php');

}
if (isset($_POST['submit'])) { // valid login by form submission
    $email = $_POST['email'];
    $password = $_POST['password'];
    $res = mysqli_query($conn, "select * from `folk_form` where `email` = '$email' and `password` = '$password' ");

    // prx(mysqli_num_rows($res));

    if(mysqli_num_rows($res)>0) {
        $res_row = mysqli_fetch_assoc($res);
        $_SESSION['IS_LOGIN']='YES';
        $_SESSION['User']=  $res_row['name'];
          redirect('index.php');

    }else{
        $msg = "Invalid username or password";

    }
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

    <title>Login</title>
</head>

<body>
    <div class="container text-center">
        <h1>Login User</h1>
        <hr>
    </div>

    <div class="container border">
        <div class="row p-4">
            <div class="col-md-6">
                <form action="" method="post" class="form">
                      <label for="UserName">Username / Email:</label>
                    <input type="text" name="email" id="Username" class="form-control" placeholder="UserName / Email "  required/>
                    <label for="UserName">Password :</label>
                    <input type="password" name="password" id="Password" class="form-control" placeholder="Password" />
                        <p style="color:red;"><?php echo $msg ?></p>
                    <div class="form-conrol py-4">

                        <button type="submit" name="submit" class="btn btn-primary">Log in</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>