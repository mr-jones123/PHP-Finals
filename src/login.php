<?php
require "../database/dbFunctions.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (validateUser($_POST["Email"], $_POST["Password"])) {
        header("Location: menu.php");
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <link rel="icon" type="image/x-icon" href="../img/actually.jpg">
    <title>Login</title>
</head>

<body>
    <h1 class="title text-right mt-20 mr-32">Feel the Power.</h1>

    <div class="w-full h-auto flex justify-end items-baseline">
        <div class="px-6  w-3/12 h-auto mr-96 ">
            <form class="bg-transparent w-full" method = "POST" action = "login.php">
                <div class="mx-4 my-4">
                    <input class=" bg-transparent border-b border-b-black w-full text-xl py-3 placeholder-gray-900
                placeholder-opacity-75 focus:outline-none focus:ring-0  font-medium" type="Email" name="Email"
                        placeholder="Email" required>
                </div>
                <div class="mx-4 my-4">
                    <input class=" bg-transparent border-b border-b-black w-full text-xl py-3 placeholder-gray-900
                placeholder-opacity-75  focus:outline-none focus:ring-0 font-medium" type="Password" name="Password"
                        placeholder="Password" required>
                </div>
                <div class="flex justify-center">
                    <button class="btn-primary text-xl">Login</button>
                </div>
            </form>
        </div>
        <h1 class="text-right mt-20 mr-24">Login to your Account.</h1>
    </div>
</body>

</html>