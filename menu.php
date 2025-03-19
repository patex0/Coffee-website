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
    <title>ALEXA COFFEE - Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .menu-item {
            animation: fadeIn 0.8s ease-out forwards;
            animation-delay: calc(var(--order) * 100ms);
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
                src="images/menu background.jpg" 
                alt="Coffee Shop Background"
                class="w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
            <div class="absolute inset-0 bg-black/30 backdrop-blur-[2px]"></div>
        </div>

        <!-- Content Wrapper -->
        <div class="relative z-10">
            <!-- Navigation Bar (Same as main page) -->
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


            <!-- Menu Content -->
            <div class="container mx-auto px-4 lg:px-8 pt-32 pb-20">
                <div class="max-w-6xl mx-auto">
                    <!-- Menu Header -->
                    <div class="text-center mb-16">
                        <h1 class="text-5xl font-bold text-white mb-4">Our Menu</h1>
                        <p class="text-gray-300 text-lg">Discover our carefully crafted selection</p>
                    </div>

                    <!-- Menu Categories -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Hot Coffee Section -->
                        <div class="backdrop-blur-md bg-black/30 p-6 rounded-2xl border border-white/10" style="--order: 1">
                            <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Hot Coffee
                            </h2>
                            <div class="space-y-4">
                                <div class="menu-item flex justify-between items-center">
                                    <div>
                                        <h3 class="text-white font-medium">Espresso</h3>
                                        <p class="text-gray-400 text-sm">Pure coffee shot</p>
                                    </div>
                                    <span class="text-orange-400 font-medium">$3.50</span>
                                </div>
                                <div class="menu-item flex justify-between items-center">
                                    <div>
                                        <h3 class="text-white font-medium">Cappuccino</h3>
                                        <p class="text-gray-400 text-sm">Espresso with steamed milk foam</p>
                                    </div>
                                    <span class="text-orange-400 font-medium">$4.50</span>
                                </div>
                                <div class="menu-item flex justify-between items-center">
                                    <div>
                                        <h3 class="text-white font-medium">Latte</h3>
                                        <p class="text-gray-400 text-sm">Espresso with steamed milk</p>
                                    </div>
                                    <span class="text-orange-400 font-medium">$4.00</span>
                                </div>
                            </div>
                        </div>

                        <!-- Cold Coffee Section -->
                        <div class="backdrop-blur-md bg-black/30 p-6 rounded-2xl border border-white/10" style="--order: 2">
                            <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                                <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                Cold Coffee
                            </h2>
                            <div class="space-y-4">
                                <div class="menu-item flex justify-between items-center">
                                    <div>
                                        <h3 class="text-white font-medium">Iced Americano</h3>
                                        <p class="text-gray-400 text-sm">Chilled espresso with water</p>
                                    </div>
                                    <span class="text-orange-400 font-medium">$4.00</span>
                                </div>
                                <div class="menu-item flex justify-between items-center">
                                    <div>
                                        <h3 class="text-white font-medium">Frappuccino</h3>
                                        <p class="text-gray-400 text-sm">Blended coffee with cream</p>
                                    </div>
                                    <span class="text-orange-400 font-medium">$5.50</span>
                                </div>
                                <div class="menu-item flex justify-between items-center">
                                    <div>
                                        <h3 class="text-white font-medium">Cold Brew</h3>
                                        <p class="text-gray-400 text-sm">24-hour steeped coffee</p>
                                    </div>
                                    <span class="text-orange-400 font-medium">$4.50</span>
                                </div>
                            </div>
                        </div>

                        <!-- Desserts Section -->
                        <div class="backdrop-blur-md bg-black/30 p-6 rounded-2xl border border-white/10" style="--order: 3">
                            <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                                <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                Desserts
                            </h2>
                            <div class="space-y-4">
                                <div class="menu-item flex justify-between items-center">
                                    <div>
                                        <h3 class="text-white font-medium">Chocolate Cake</h3>
                                        <p class="text-gray-400 text-sm">Rich chocolate layers</p>
                                    </div>
                                    <span class="text-orange-400 font-medium">$6.00</span>
                                </div>
                                <div class="menu-item flex justify-between items-center">
                                    <div>
                                        <h3 class="text-white font-medium">Tiramisu</h3>
                                        <p class="text-gray-400 text-sm">Coffee-flavored dessert</p>
                                    </div>
                                    <span class="text-orange-400 font-medium">$7.00</span>
                                </div>
                                <div class="menu-item flex justify-between items-center">
                                    <div>
                                        <h3 class="text-white font-medium">Croissant</h3>
                                        <p class="text-gray-400 text-sm">Buttery pastry</p>
                                    </div>
                                    <span class="text-orange-400 font-medium">$3.50</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Special Offers Section -->
                    <div class="mt-16 backdrop-blur-md bg-gradient-to-r from-orange-500/20 to-red-500/20 p-8 rounded-2xl border border-orange-500/20">
                        <h2 class="text-2xl font-bold text-white mb-4">Special Offers</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex items-center gap-4 bg-black/20 p-4 rounded-xl">
                                <div class="bg-orange-400/20 p-3 rounded-lg">
                                    <svg class="w-8 h-8 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-medium">Morning Bundle</h3>
                                    <p class="text-gray-300 text-sm">Coffee + Croissant for $6</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 bg-black/20 p-4 rounded-xl">
                                <div class="bg-cyan-400/20 p-3 rounded-lg">
                                    <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-medium">Afternoon Delight</h3>
                                    <p class="text-gray-300 text-sm">Any cake slice 50% off with coffee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="relative z-10 bg-black/50 backdrop-blur-sm py-6">
                <div class="container mx-auto px-6 text-center text-white">
                    <p>&copy; 2023 The Cozy Cup. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>