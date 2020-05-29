<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>.error{color: crimson;}</style>
</head>
<body>

    <?php
    function test_input($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["request_method"] == "POST"){
        if (empty($_POST["username"])) {
            $userError = "User is required";
        } else {
            $user = test_input($_POST["username"]);
            if (!preg_match("/^[a-zA-Z]*$/",$user)){
                $userError = "Only letters and whitespace are allowed!";
            }
        } 

        if (empty($_POST["password"])) {
            $passwordError = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
            if (!preg_match("/^[a-zA-Z0-9]*$/",$password)){
                $passwordError = "Only letters, numbers and whitespace are allowed!";
            }
        } 

    }
    ?>


    <form action="login.php" method="post">
        <p><span class="error">* required field</span></p>
        Username: <input type="text" name="username">
        <span class="error">* <?php echo $userError; ?></span>
        <br><br>
        Password: <input type="password" name="password">
        <span class="error">* <?php echo $passwordError ?></span>
        <br><br>
        <input type="submit" name="submit" value="Login">
    </form>


    <?php
    session_start();
        if (isset($_POST['submit'])){
            $login = array('admin'=> '123', 'nhat'=>'777');
            $username = isset($_POST['username']) ? $_POST ['username'] : '';
            $password = isset($_POST['password']) ? $_POST ['password'] : '';

            if(isset($login[$username]) && $login[$username] == $password) {
                $_SESSION['userdata']['username'] = $username;
                header ("location: administrator.php");
                exit; 
            } else {
                $Msg = "<span style='color: crimson;'> Invalid</span>";
                echo $Msg;
            }
        }
    
    
    ?>
</body>
</html>