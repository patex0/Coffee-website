<?php
session_start();
 include 'db.php';
if ($_SERVER["REQUEST_METHOD"] =="POST") {
  $EMAIL = $_POST['email'];
  $PASSWORD = $_POST['password'];
  $sql = "SELECT * FROM login WHERE email=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $EMAIL);
  $stmt->execute();
  $result = $stmt->get_result();
  $User = $result->fetch_assoc();

  if($User && password_verify($PASSWORD,$User['password'])){
    $_SESSION['user_id'] = $User['id'];
    $_SESSION['fullname'] = $User['fullname'];
    header('Location: home.php');
    exit();
  } else{
    echo"Invalid emailor password";
    header('Location: index.php');
  }
  $stmt->close();
  $conn->close();
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
</head>
<body class="relative flex items-center justify-center min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('images/contact background.jpg');">

  <!-- Background Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-50 backdrop-blur-md"></div>

  <!-- Login Form Container -->
  <div class="relative z-10 w-full max-w-md bg-white bg-opacity-90 backdrop-blur-lg p-8 rounded-2xl shadow-2xl">

    <!-- Logo -->
    <div class="flex justify-center mb-6">
      <img src="images/Alexa_Coffee_Shop-removebg-preview.png" alt="Logo" class="h-16">
    </div>

    <h2 class="text-gray-800 text-center text-3xl font-extrabold">Sign in to your account</h2>
    <p class="text-center text-gray-500 mb-6">Welcome back! Please enter your details.</p>

    <form class="space-y-5" method="post">
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <div class="relative">
          <input type="email" name="email" placeholder="name@example.com" class="w-full mt-1 p-3 pl-10 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
          <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
            📧
          </span>
        </div>
      </div>                

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <div class="relative">
          <input type="password" name="password" placeholder="********" class="w-full mt-1 p-3 pl-10 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
          <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
            🔑
          </span>
        </div>
      </div>

      <!-- Remember Me & Forgot Password -->
      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center">
          <input type="checkbox" class="mr-2 rounded border-gray-300 focus:ring-blue-400">
          Remember me
        </label>
        <a href="#" class="text-blue-500 hover:underline">Forgot password?</a>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white py-3 rounded-lg font-semibold shadow-lg hover:scale-105 transition transform duration-300 ease-in-out">Sign In</button>

      <!-- Sign Up Link -->
      <p class="text-center text-gray-600 mt-4">Don’t have an account? <a href="./signup.php" class="text-blue-500 font-semibold hover:underline">Sign up</a></p>
    </form>

  </div>

</body>
</html>

</html> 