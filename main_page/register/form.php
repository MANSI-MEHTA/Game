<html>
<body>
<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "ajay", "aaa", "accounts");

//the form has been submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {
        
        

        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password']; //md5 has password for security
        $avatar_path='images/'.$_FILES['avatar']['name'];

        
        //make sure the file type is image
        if (preg_match("!image!",$_FILES['avatar']['type'])) {
            
            //copy image to images/ folder 
            if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
                
                //set session variables
                $_SESSION['username'] = $username;
                $_SESSION['avatar'] = $avatar_path;

                //insert user data into database

                 $sql = "INSERT INTO users1 (username, email, password, avatar) "
                        . "VALUES ('$username', '$email', '$password', '$avatar_path')";
                
                if ($mysqli->query($sql) === TRUE)
                {
                    $_SESSION['message'] = "Registration succesful! Added $username to the database!";
                    header("location: welcome.php");
                }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close();          
            }
            else {
                $_SESSION['message'] = 'File upload failed!';
            }
        }
        else {
            $_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
        }
    }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
}
?>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      <button type="button"  class="btn btn-block btn-primary"  /> <a href="login/login.php">Login </a> </button>
    </form>
  </div>
</div>
<html>
<body>