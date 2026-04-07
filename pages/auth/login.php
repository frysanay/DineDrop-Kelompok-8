<?php
// pages/auth/login.php
session_start();
require_once '../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("Location: ../../index.php");
        exit;
    } else {
        $error = "Email atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DineDrop - Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap');
        
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('../../assets/images/signin.jpg') center/cover no-repeat;
            min-height: 100vh;
        }
    </style>
</head>
<body class="text-white min-h-screen flex items-center justify-center px-6 py-12">

    <div class="w-full max-w-md mx-auto">
        
        <!-- Logo -->
        <div class="flex justify-center items-center gap-3 mb-8">
            <img src="../../assets/images/logodinedrop.png" alt="Logo" class="w-12 h-12">
            <h1 class="text-4xl font-bold tracking-wider" style="font-family: 'Playfair Display', serif;">
                DINEDROP
            </h1>
        </div>

        <!-- Gambar Makanan -->
        <div class="flex justify-center mb-10">
            <img src="../../assets/images/foodlogin.png" 
                 alt="Food" 
                 class="rounded-3xl shadow-2xl w-full max-w-xs">
        </div>

        <h2 class="text-3xl font-semibold text-center mb-8">SIGN IN</h2>

        <?php if (isset($error)): ?>
            <div class="bg-red-600/80 text-white p-4 rounded-2xl mb-6 text-center">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-5">
            <input type="email" name="email" placeholder="E-mail Address" required
                   class="w-full bg-white/10 border border-white/30 focus:border-white rounded-3xl py-4 px-6 placeholder-white/70">

            <input type="password" name="password" placeholder="Password" required
                   class="w-full bg-white/10 border border-white/30 focus:border-white rounded-3xl py-4 px-6 placeholder-white/70">

            <div class="text-right">
                <a href="#" class="text-sm underline">Forgot password</a>
            </div>

            <button type="submit"
                    class="w-full bg-[#4A2C1F] hover:bg-[#3A2218] py-4 rounded-3xl text-lg font-semibold mt-4">
                SIGN IN
            </button>
        </form>

        <p class="text-center mt-10">
            Don't have an account? 
            <a href="register.php" class="underline font-medium">Sign Up</a>
        </p>
    </div>
</body>
</html>