<?php
$insert=false;
if(isset($_POST['name'])){
   //Set connection variable
    $server="localhost";
   $username="root";
   $password="";

   //Create a database connection
   $con=mysqli_connect($server,$username,$password);

   //ckeck for conection success
   if(!$con){
    die("conection to this database is fail due to ".mysqli_connect_error());
   }/*jo $con ae false thay to */
//    echo "Success connecting to db";

   //collect post variabe
   $name=$_POST['name'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $desc=$_POST['desc'];
   $sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//    echo $sql;
   
   //Execute the query
   if($con->query($sql)==true){
    // echo "Successfully inserted";
       
    //Flag for successful insertion
    $insert=true;
   }
   else{
    echo "ERROR: $sql<br> $con->error";
   }

   //Close the Database connection
   $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="bg_1.jpg" alt="GEC bharuch">
    <div class="container">
        <h1>Welcome to GEC Bharuch US Trip Form</h1>
        <p>Enter Your detail and submit this form to conform participation in the trip</p>
        <?php
        if($insert==true){
        echo "<p id='submitMsg'>Thanks for submitting your form.We are happy to joining you in US trip</p>";
        } /*php ma id ma khali single quate j aave */
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter More information here"></textarea>
            <button class="btn">Submit</button>

        </form>
    </div>
    <script src="index.js"></script>
    <!-- `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'testtime', '23', 'male', 'xyz@gmail.com', '9999999999', 'This is a good value', current_timestamp()); -->
</body>
</html>