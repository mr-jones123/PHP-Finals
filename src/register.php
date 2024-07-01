<?php
    require "../database/dbFunctions.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        createUser($_POST['Name'], $_POST['Email'], $_POST['Password']);
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <link rel="icon" type="image/x-icon" href="../img/actually.jpg">
    <title>Register</title>
</head>

<body>
    <h1 class="title mt-20 ml-28">Join The Power.</h1>

    <div class="w-full h-auto ml-32 mt-20 flex items-baseline">
        <h1 class="text-left mt-14 ml-20">Create an Account</h1>
        <div class="px-6  w-3/12 h-auto ml-96 ">

            <form class="w-full" method="POST" action="register.php">
                <div class="mx-4 my-4">
                    <input class=" bg-transparent border-b border-b-black w-full text-xl py-3 placeholder-gray-900
                placeholder-opacity-75 focus:outline-none focus:ring-0  font-medium" type="text" name="Name"
                        placeholder="Name">
                </div>
                <div class="mx-4 my-4">
                    <input class=" bg-transparent border-b border-b-black w-full text-xl py-3 placeholder-gray-900
                placeholder-opacity-75 focus:outline-none focus:ring-0  font-medium" type="Email" name="Email"
                        placeholder="Email">
                </div>
                <div class="mx-4 my-4">
                    <input class=" bg-transparent border-b border-b-black w-full text-xl py-3 placeholder-gray-900
                placeholder-opacity-75  focus:outline-none focus:ring-0 font-medium" type="Password" name="Password"
                        placeholder="Password">
                </div>
                <div class="flex justify-center">
                    <button class="btn-primary text-xl">Register</button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>