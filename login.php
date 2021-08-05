<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(!array_search($username, $id_array)){
        $login_message = "Your password or your username didn't match";
    } else{
        if($password == $id_array[$username]){
            
        } else{
            $login_message = "Your password or you username didn't match"
        }
    }

?>
}
<body>
    <h1>EzChat</h1>
    <div class="login-form">
        <form action="" method="post">
            <label for="username">Username: </label>
            <input name="username" id="username" type="text" required>
            <label for="password">Password: </label>
            <input name="password" type="text" required>
            <input name="submit-login" type="submit" value="submit">

        </form>
    </div>
</body>
</html>