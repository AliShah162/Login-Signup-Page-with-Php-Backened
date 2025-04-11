<link rel="stylesheet" href="style.css">
<?php
$con=mysqli_connect("localhost","root","","signup&loginpage db")or die("Couldn't Connect to the database!!");
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
         $password=$_POST['password'];
            }
$verify_query=mysqli_query($con,"SELECT Email FROM credentals WHERE Email='$email'");    
    if(mysqli_num_rows($verify_query) !=0){
        echo "<div class='message'>
        <p> This Email is alredy in use!</p>
        </div>";
         echo"<a href='javascript:self.history.back()'> <button class='btn'> Go Back</button>";    
    }
    else{
        mysqli_query($con,"INSERT INTO credentals (Email,Password) VALUES ('$email','$password')");
         echo "<div class='message'>
        <p class='greentext'> Registration Successful!</p>
        </div>";
        echo"<a href='javascript:self.history.back()'> <button class='btn'> Go Back</button>";
    }
?>            