
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';  // or your live server IP/domain
$db   = 'curcapit_sset';
$user = 'curcapit_sets';
$pass = 'nG0)6xvpHqP}';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    // ✅ Use bind_result instead of get_result
    $stmt->bind_result($user_id, $hashed_password);

    if ($stmt->fetch()) {
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
           header("Location: /app/user/home.php");
exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Username not found.";
    }

    $stmt->close();
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Login - Chain Master</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'n900': '#0B1121',
              'g300': '#00A36C',
              'g400': '#008F5D',
              'n70': '#9CA3AF',
            },
            animation: {
              'spin-slow': 'spin 2s linear infinite',
            }
          }
        }
      }
    </script>
    <link href="style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body class="antialiased">
      <!-- Smartsupp Live Chat script -->

    <div class="min-h-screen bg-n900 relative overflow-hidden flex items-center justify-center text-white">
      <!-- Background gradient -->
      <div class="w-[582px] h-[582px] rounded-full bg-g300/30 absolute -top-32 -left-20 blur-[120px]"></div>
      <div class="w-[582px] h-[582px] rounded-full bg-blue-500/10 absolute -bottom-32 -right-20 blur-[120px]"></div>

      <div class="relative z-20 w-full max-w-md mx-auto px-6 py-12">
        <!-- Logo -->
        <div class="flex justify-center mb-8">
          <img src="./assets/images/logo.png" alt="Logo" class="h-12 w-auto"/>
        </div>

        <!-- Header -->
        <div class="text-center space-y-3 mb-8">
          <h1 class="text-3xl font-bold tracking-tight">Welcome Back</h1>
          <p class="text-n70">Login to your account</p>
        </div>

 

        <!-- Login Form -->
        <form method="post" action="login.php">
          <div class="space-y-5">
            <!-- Email Field -->
            <div class="space-y-2">
              <label for="email" class="block text-sm font-medium text-white">Email</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="ph ph-envelope text-n70"></i>
                </div>
                <input type="email" name="username" id="username" required 
                       class="block w-full pl-11 pr-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:ring-2 focus:ring-g300 focus:border-transparent transition-all duration-200 text-white placeholder-n70 text-sm"
                       placeholder="Enter your email" />
              </div>
            </div>

            <!-- Password Field -->
            <div class="space-y-2">
              <label for="password" class="block text-sm font-medium text-white">Password</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="ph ph-lock text-n70"></i>
                </div>
                <input type="password" id="password" name="password" required 
                       class="block w-full pl-11 pr-12 py-3 bg-white/5 border border-white/10 rounded-lg focus:ring-2 focus:ring-g300 focus:border-transparent transition-all duration-200 text-white placeholder-n70 text-sm passwordField"
                       placeholder="••••••••" />
                <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center passwordShow">
                  <i class="ph ph-eye-closed text-n70 hover:text-white transition-colors"></i>
                </button>
              </div>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember" 
                       class="h-4 w-4 rounded border-white/10 bg-white/5 text-g300 focus:ring-g300 focus:ring-offset-0" />
                <label for="remember" class="ml-2 block text-sm text-n70">Remember me</label>
              </div>
              <a href="reset-password.php" class="text-sm text-g300 hover:text-g400 transition-colors">Forgot Password?</a>
            </div>
          </div>

          <!-- Error/Success Messages -->
          <div id="error-message" class="hidden rounded-lg bg-red-500/10 border border-red-500/20 p-4 text-sm text-red-400 text-center">
                      </div>
          <div id="success-message" class="hidden rounded-lg bg-green-500/10 border border-green-500/20 p-4 text-sm text-green-400 text-center"></div>

          <!-- Submit Button -->
          <button type="submit" 
                  class="w-full flex items-center justify-center px-6 py-3 rounded-lg bg-g300 text-white font-semibold hover:bg-g400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-g300 transition-all duration-200 shadow-lg shadow-g300/30">
            <span class="button-text">Sign In</span>
            <span class="loading-spinner hidden ml-2">
              <i class="ph ph-circle-notch text-xl animate-spin-slow"></i>
            </span>
          </button>
        </form>

        <!-- Register Link -->
        <p class="mt-8 text-center text-sm text-n70">
          Don't have an account? 
          <a href="register.php" class="font-medium text-g300 hover:text-g400 transition-colors">
            Create one now
          </a>
        </p>
      </div>
    </div>

    <script>
    $(document).ready(function() {
      // Toggle password visibility
      $('.passwordShow').click(function() {
        const passwordField = $('.passwordField');
        const icon = $(this).find('i');
        
        if (passwordField.attr('type') === 'password') {
          passwordField.attr('type', 'text');
          icon.removeClass('ph-eye-closed').addClass('ph-eye');
        } else {
          passwordField.attr('type', 'password');
          icon.removeClass('ph-eye').addClass('ph-eye-closed');
        }
      });

     
    </script>
  </body>
</html> 