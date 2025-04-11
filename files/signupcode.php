<link rel="stylesheet" href="style.css">
<?php
$con=mysqli_connect("localhost","root","","signup&loginpage db")or die("Couldn't Connect to the database!!");
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
    }
$verify_query=mysqli_query($con,"SELECT Username FROM signup_credentals WHERE Username='$username'");    
    if(mysqli_num_rows($verify_query) !=0){
        echo "<div class='message'> 
        <p> This Username is alredy in use!</p>
        </div>";
        echo"<a href='javascript:self.history.back()'> <button class='btn'> Go Back</button>";    
    }
    else{
        mysqli_query($con,"INSERT INTO signup_credentals (Username,Password) VALUES ('$username','$password')");
        echo "<div class='message'>
        <p class='greentext'> Registration Successful!</p>
        </div>";
        echo"<a href='javascript:self.history.back()'> <button class='btn'> Go Back</button>";
    }
?>            