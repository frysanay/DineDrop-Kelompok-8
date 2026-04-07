<?php
// pages/auth/register.php
session_start();
require_once '../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error = "Password dan Confirm Password tidak cocok!";
    } elseif (strlen($password) < 6) {
        $error = "Password minimal 6 karakter!";
    } else {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        
        if ($stmt->rowCount() > 0) {
            $error = "Email sudah terdaftar!";
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->execute([$email, $hashed]);
            
            $_SESSION['success'] = "Registrasi berhasil! Silakan login.";
            header("Location: login.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DineDrop - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap');
        
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('../../assets/images/signup.jpg') center/cover no-repeat;
            min-height: 100vh;
        }
    </style>
</head>
<body class="text-white min-h-screen flex items-center justify-center px-6 py-12">

    <div class="w-full max-w-md mx-auto">
        
        <!-- Logo -->
        <div class="flex justify-center items-center gap-3 mb-8">
            <img src="../../assets/images/logodinedrop.png" alt="DineDrop" class="w-12 h-12">
            <h1 class="text-4xl font-bold tracking-wider" style="font-family: 'Playfair Display', serif;">
                DINEDROP
            </h1>
        </div>

        <!-- Gambar Makanan -->
        <div class="flex justify-center mb-10">
            <img src="../../assets/images/foodsignup.png" 
                 alt="Food" 
                 class="rounded-3xl shadow-2xl w-full max-w-xs">
        </div>

        <h2 class="text-3xl font-semibold text-center mb-8">SIGN UP</h2>

        <?php if (isset($error)): ?>
            <div class="bg-red-600/80 text-white p-4 rounded-2xl mb-6 text-center">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-5">
            <input type="email" 
                   name="email" 
                   placeholder="E-mail Address" 
                   required
                   class="w-full bg-white/10 border border-white/30 focus:border-white rounded-3xl py-4 px-6 placeholder-white/70 outline-none">

            <input type="password" 
                   name="password" 
                   placeholder="Password" 
                   required
                   class="w-full bg-white/10 border border-white/30 focus:border-white rounded-3xl py-4 px-6 placeholder-white/70 outline-none">

            <input type="password" 
                   name="confirm_password" 
                   placeholder="Confirm Password" 
                   required
                   class="w-full bg-white/10 border border-white/30 focus:border-white rounded-3xl py-4 px-6 placeholder-white/70 outline-none">

            <button type="submit"
                    class="w-full bg-[#4A2C1F] hover:bg-[#3A2218] transition-all py-4 rounded-3xl text-lg font-semibold mt-6">
                SIGN UP
            </button>
        </form>

        <p class="text-center mt-10 text-sm">
            Sudah punya akun? 
            <a href="login.php" class="underline font-medium">Sign In</a>
        </p>
    </div>
</body>
</html>