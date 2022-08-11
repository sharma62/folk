 <?php

    include "top.php";
    $email_valid = "";
    $required_fields =  "<span style='color:red'>*</span>";

    if (isset($_POST['submit'])) {
        // print_r($_POST);
        $name = get_safe_value($_POST['name']);
        $father_name = get_safe_value($_POST['fathername']);
        $email = get_safe_value($_POST['email']);
        $gender = get_safe_value($_POST['gender']);
        $password = get_safe_value($_POST['password']);


        $res = mysqli_query($conn, "select * from `folk_form` where `email` = '$email' ");
    

        //    prx(mysqli_fetch_assoc($res));

        if (mysqli_num_rows($res)> 0) {
            $email_valid = "Already Registered Email Address";
        } else {
            $sql_query = "INSERT INTO `folk_form` ( `name`, `father_name`, `email`, `gender`, `password`) 
                                 VALUES ('$name', '$father_name', '$email', '$gender', '$password')";
            mysqli_query($conn, $sql_query);
        }
    }


    mysqli_close($conn);



    ?>



 <div class="container py-5 border">
     <div class="row">
         <div class="col">

             <form method="POST" action="">
                 <div class="form-group">
                     <div class="row">
                         <div class="col-md-6">
                             <label for="Name" class="form-label">Student Name <?php echo $required_fields ?></label>
                             <input type="text" class="form-control" id="Name" name="name" placeholder="Student Name" required />
                         </div>

                         <div class="col-md-6">
                             <label for="inputEmail4" class="form-label">Father's Name <?php echo $required_fields ?></label>
                             <input type="txet" class="form-control" id="inputEmail4" name="fathername" placeholder="Father's Name" required />
                         </div>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="row">
                         <div class="col-md-6">
                             <label for="inputEmail4" class="form-label">Email <?php echo $required_fields ?></label>
                             <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter your email address" required />
                             <span style="color: red;"><?php echo $email_valid; ?></span>
                         </div>
                         <div class="col-md-3">
                             <label for="inputEmail4" class="form-label">City <?php echo $required_fields ?></label>
                             <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>
                         </div>

                         <div class="col-md-3 ">
                             <label for="gender" class="form-label ">Gender : <?php echo $required_fields ?> </label>
                             <select name="gender" id="" class="form-control" name="gender" required>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                                 <option value="transgender">Transgender</option>
                             </select>
                         </div>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="row">

                         <div class="col-md-6">
                             <label for="inputPassword4" class="form-label">Password <?php echo $required_fields ?></label>
                             <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Enter your password" required />
                         </div>
                     </div>
                 </div>



                 <button type="submit" name="submit" class="btn btn-primary">Sign in</button>

             </form>
         </div>
     </div>

 </div>
 <!-- <p ><a href="data_table.php">Go to Data Table</a></p> -->



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