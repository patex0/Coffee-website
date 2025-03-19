<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: index.php ");
    exit();

}

include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALEXA COFFEE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-gradient-overlay {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4));
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
    </style>
</head>
<body class="font-sans">
    <!-- Main Container with Background -->
    <div class="min-h-screen relative">
        <!-- Background Image -->
        <div class="fixed inset-0 z-0">
            <img 
                src="images/pexels-chevanon-312418.jpg" 
                alt="Coffee Shop Background"
                class="w-full h-full object-cover"
            >
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-overlay"></div>
        </div>

        <!-- Content Container -->
        <div class="relative z-10">
            <!-- Navigation Bar -->
            <nav class="bg-black/30 backdrop-blur-sm fixed w-full z-50">
                <div class="container mx-auto px-6">
                    <div class="flex justify-between items-center h-20">
                        <!-- Logo Section -->
                        <div class="flex items-center space-x-4">
                            <div class="relative group">
                                <img 
                                    src="images/Alexa_Coffee_shop__4_-removebg-preview.png" 
                                    alt="Alexa Coffee Logo"
                                    class="w-16 h-16 rounded-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                <div class="absolute inset-0 rounded-full bg-white/10 group-hover:bg-white/20 transition-colors duration-300"></div>
                            </div>
                            <h1 class="text-4xl font-bold tracking-tight text-white">
                                <span class="text-cyan-400 hover:text-cyan-300 transition-colors duration-300">COF</span>
                                <span class="text-orange-400 hover:text-orange-300 transition-colors duration-300">FEE</span>
                            </h1>
                        </div>

                        <!-- Desktop Navigation Menu -->
                        <ul class="hidden md:flex items-center space-x-8">
                            <li><a href="./home.php" class="text-white hover:text-cyan-300 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-cyan-300">HOME</a></li>
                            <li><a href="./menu.php" class="text-white hover:text-cyan-300 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-cyan-300">MENU</a></li>
                            <li><a href="./services.php" class="text-white hover:text-cyan-300 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-cyan-300">SERVICES</a></li>
                            <li><a href="./contacts.php" class="text-white hover:text-cyan-300 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-cyan-300">CONTACTS</a></li>
                            <li><a href="./about us.php" class="text-white hover:text-cyan-300 transition-colors duration-300 py-2 border-b-2 border-transparent hover:border-cyan-300">ABOUT US</a></li>
                        </ul>

                        <!-- Mobile Menu Button -->
                        <button class="md:hidden p-2 rounded-lg hover:bg-white/10 transition-colors duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <div class="container mx-auto px-6 pt-32 pb-20">
                <div class="max-w-4xl mx-auto mt-16 text-center animate-fade-in">
                    <div class="backdrop-blur-sm bg-black/20 p-8 rounded-2xl">
                        <h1 class="text-5xl md:text-7xl font-bold mb-8 leading-tight text-white">
                            Best 
                            <span class="text-orange-400 relative">
                                customer care
                                <span class="absolute -bottom-2 left-0 w-full h-1 bg-orange-300/30 transform -skew-x-12"></span>
                            </span> 
                            <br class="md:hidden">will always<br>
                            Find the audience
                        </h1>
                        <p class="text-gray-200 text-xl md:text-2xl mb-12 leading-relaxed">
                            We provide unique and excellent services for our valued customers
                        </p>
                        <button 
                            type="button"
                            class="group relative px-8 py-4 bg-gradient-to-r from-red-600 to-red-500 text-white text-lg font-semibold rounded-full 
                                   hover:from-red-700 hover:to-red-600 transition-all duration-300 
                                   transform hover:-translate-y-1 hover:shadow-xl"
                        >
                            <span class="relative z-10">Shop now</span>
                            <div class="absolute inset-0 rounded-full bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                        </button>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="mt-20 flex justify-center space-x-8">
                        <div class="w-16 h-16 rounded-full bg-orange-400/20 backdrop-blur-sm animate-pulse"></div>
                        <div class="w-16 h-16 rounded-full bg-cyan-400/20 backdrop-blur-sm animate-pulse delay-150"></div>
                        <div class="w-16 h-16 rounded-full bg-orange-400/20 backdrop-blur-sm animate-pulse delay-300"></div>
                    </div>
                </div>
            </div>
            <!--footer-->
            <footer class="relative z-10 bg-black/50 backdrop-blur-sm py-6">
                <div class="container mx-auto px-6 text-center text-white">
                    <p>&copy; 2023 The Cozy Cup. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>