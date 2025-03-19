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
    <title>Our Services - Coffee Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .service-card {
            animation: fadeIn 0.8s ease-out forwards;
            animation-delay: calc(var(--order) * 200ms);
            opacity: 0;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Main Container -->
    <div class="min-h-screen relative overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="fixed inset-0 z-0">
            <img 
                src="images/pexels-chevanon-312418.jpg" 
                alt="Coffee Shop Background"
                class="w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
            <div class="absolute inset-0 bg-black/30 backdrop-blur-[2px]"></div>
        </div>

        <!-- Content Wrapper -->
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

            <!-- Services Content -->
            <main class="container mx-auto px-6 pt-32 pb-20">
                <!-- Services Header -->
                <div class="text-center mb-16">
                    <h2 class="text-5xl font-bold text-white mb-4">Our Services</h2>
                    <p class="text-gray-300 text-lg max-w-2xl mx-auto">Experience the perfect blend of hospitality and excellence with our comprehensive coffee shop services.</p>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Coffee Catering Service -->
                    <div class="service-card bg-black/40 backdrop-blur-md rounded-xl p-6 hover:bg-black/50 transition-all duration-300" style="--order: 1">
                        <div class="text-cyan-400 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Coffee Catering</h3>
                        <p class="text-gray-300">Professional coffee service for your events and meetings. We bring the café experience to you.</p>
                    </div>

                    <!-- Coffee Training -->
                    <div class="service-card bg-black/40 backdrop-blur-md rounded-xl p-6 hover:bg-black/50 transition-all duration-300" style="--order: 2">
                        <div class="text-orange-400 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Barista Training</h3>
                        <p class="text-gray-300">Learn the art of coffee making from our expert baristas. Perfect for beginners and professionals alike.</p>
                    </div>

                    <!-- Private Events -->
                    <div class="service-card bg-black/40 backdrop-blur-md rounded-xl p-6 hover:bg-black/50 transition-all duration-300" style="--order: 3">
                        <div class="text-cyan-400 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Private Events</h3>
                        <p class="text-gray-300">Host your special occasions in our cozy atmosphere. We offer customized packages for any celebration.</p>
                    </div>

                    <!-- Coffee Consultation -->
                    <div class="service-card bg-black/40 backdrop-blur-md rounded-xl p-6 hover:bg-black/50 transition-all duration-300" style="--order: 4">
                        <div class="text-orange-400 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Coffee Consultation</h3>
                        <p class="text-gray-300">Get expert advice on coffee selection, brewing methods, and equipment for your home or business.</p>
                    </div>

                    <!-- Coffee Subscriptions -->
                    <div class="service-card bg-black/40 backdrop-blur-md rounded-xl p-6 hover:bg-black/50 transition-all duration-300" style="--order: 5">
                        <div class="text-cyan-400 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Coffee Subscriptions</h3>
                        <p class="text-gray-300">Regular deliveries of our premium coffee beans, customized to your taste preferences.</p>
                    </div>

                    <!-- Equipment Sales -->
                    <div class="service-card bg-black/40 backdrop-blur-md rounded-xl p-6 hover:bg-black/50 transition-all duration-300" style="--order: 6">
                        <div class="text-orange-400 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Equipment Sales</h3>
                        <p class="text-gray-300">Quality coffee-making equipment and accessories for both home and commercial use.</p>
                    </div>
                </div>
            </main>
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