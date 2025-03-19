<?php
session_start();
 include 'db.php';
if ($_SERVER["REQUEST_METHOD"] =="POST") {
  $EMAIL = $_POST['email'];
  $FULLNAME =$_POST['fullname'];
  $PASSWORD = password_hash($_POST['password'] ,PASSWORD_DEFAULT);

  $sql = "INSERT INTO  login (fullname , email, password) VALUES(?,?,?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss",$FULLNAME,$EMAIL,$PASSWORD);


if ($stmt->execute()) {
 echo"Registration succesfull .<a href='index.php'> Login here</a>";

} else {
  echo" Error: ". $stmt->error;
}
  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Sign Up</title>
</head>
<body class="relative flex items-center justify-center min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('');">

  <!-- Background Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-50 backdrop-blur-md"></div>

  <!-- Signup Form Container -->
  <div class="relative z-10 w-full max-w-md p-8 bg-black bg-opacity-90 backdrop-blur-lg shadow-2xl rounded-3xl">
    
    <!-- Logo -->
    <div class="flex justify-center mb-6">
      <img src="images/Alexa_Coffee_Shop-removebg-preview.png" alt="Logo" class="h-16">
    </div>

    <h2 class="text-gray-800 text-center text-3xl font-extrabold">Create an Account</h2>
    <p class="text-center text-gray-500 mb-6">Join us today! It's quick and easy.</p>

    <form method="POST" class="space-y-5">
      <!-- Full Name -->
      <div>
        <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
        <div class="relative">
          <input type="text" name="fullname" placeholder="John Doe" class="w-full mt-1 p-3 pl-10 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
          <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
            📛
          </span>
        </div>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <div class="relative">
          <input type="email" name="email" placeholder="example@example.com" class="w-full mt-1 p-3 pl-10 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
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

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white py-3 rounded-lg font-semibold shadow-lg hover:scale-105 transition transform duration-300 ease-in-out">Sign Up</button>

      <!-- Already have an account? -->
      <p class="text-center text-gray-600 mt-4">Already have an account? <a href="index.php" class="text-blue-500 font-semibold hover:underline">Login</a></p>
    </form>
  </div>

</body>
</html>
              