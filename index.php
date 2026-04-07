<?php
// index.php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DineDrop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap');
        
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)), 
                        url('assets/images/awal.jpg') center/cover no-repeat;
            min-height: 100vh;
        }
    </style>
</head>
<body class="text-white flex items-center justify-center min-h-screen px-6">

    <div class="w-full max-w-md mx-auto text-center">
        
        <!-- Logo -->
        <div class="flex items-center justify-center gap-3 mb-16">
            <img src="assets/images/logodinedrop.png" alt="DineDrop" class="w-14 h-14">
            <h1 class="text-5xl font-bold tracking-wider" style="font-family: 'Playfair Display', serif;">
                DINEDROP
            </h1>
        </div>

        <div class="space-y-5">
            <a href="pages/auth/login.php" 
               class="block bg-[#4A2C1F] hover:bg-[#3A2218] transition py-4 rounded-3xl text-lg font-semibold">
                SIGN IN
            </a>
            
            <a href="pages/auth/register.php" 
               class="block bg-[#4A2C1F] hover:bg-[#3A2218] transition py-4 rounded-3xl text-lg font-semibold">
                SIGN UP
            </a>
        </div>
    </div>
</body>
</html>