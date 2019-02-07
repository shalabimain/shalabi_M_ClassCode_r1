<?php
    require_once('scripts/config.php');
    confirm_logged_in();


    if(isset($_POST['submit'])){
        $fname = trim($_POST['fname']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        
        //Validation
        if(empty($username) || empty($password) || empty($email)){
            $message = 'Please fill in the required fields';
        }else{
            $result = createUser($fname, $username, $password, $email);
            $message = 'Data seems cool.';
        }

    }
?>


<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php if(!empty($message)):?>
	    <p><?php echo $message;?></p>
	<?php endif;?>
    <h2>Create User</h2>
    <form action="admin_createuser.php" method="POST">
        <label for="first-name">First name</label>
        <input type="text" id="first-name" name="fname" value=""><br><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value=""><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value=""><br><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value=""><br><br>

        <button type="submit" name="submit">Create User</button>
    </form>


</body>
</html>