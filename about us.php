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
    <title>About Us - The Cozy Cup</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-section {
            animation: fadeIn 0.8s ease-out forwards;
            animation-delay: calc(var(--order) * 200ms);
            opacity: 0;
        }
        .team-member:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Main Container -->
    <div class="min-h-screen relative overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="fixed inset-0 z-0">
            <img 
                src="images/contact background.jpg" 
                alt="Coffee Shop Background"
                class="w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
            <div class="absolute inset-0 bg-black/30 backdrop-blur-[2px]"></div>
        </div>

        <!-- Content Wrapper -->
        <div class="relative z-10">
            <!-- Navigation Bar-->
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
                                <span class="text-cyan-400 hover:text-cyan-300 transition-colors duration-300">ALEXA</span>
                                <span class="text-orange-400 hover:text-orange-300 transition-colors duration-300">COFFEE</span>
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
            </nav>

            <!-- Main Content -->
            <div class="container mx-auto px-6 pt-28 pb-16">
                <!-- Our Story Section -->
                <div class="animate-section mb-16 bg-white/10 backdrop-blur-md rounded-2xl p-8 text-white" style="--order: 1">
                    <h2 class="text-4xl font-bold mb-6 text-cyan-400">Our Story</h2>
                    <p class="text-lg leading-relaxed">
                        Welcome to The Cozy Cup, where we're passionate about serving up more than just great coffee. 
                        Our story began with a simple idea: to create a warm and inviting space where friends and 
                        neighbours could gather to enjoy high-quality coffee and good company.
                    </p>
                </div>

                <!-- Our Team Section -->
                <div class="animate-section mb-16" style="--order: 2">
                    <h2 class="text-4xl font-bold mb-8 text-center text-orange-400">Our Team</h2>
                    <p class="text-white text-lg text-center mb-8">
                        Meet our team of coffee lovers, dedicated to bringing you the best experience possible.
                    </p>
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Team Member Cards -->
                        <div class="team-member bg-white/10 backdrop-blur-md rounded-xl p-6 text-white text-center transition-transform duration-300">
                            <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-cyan-400">
                                <img src="images/owner.jpg" alt="Alexa Patex" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold mb-2">Alexa Patex</h3>
                            <p class="text-cyan-400">Owner</p>
                        </div>
                        <div class="team-member bg-white/10 backdrop-blur-md rounded-xl p-6 text-white text-center transition-transform duration-300">
                            <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-orange-400">
                                <img src="images/barista.jpg" alt="John Hardin" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold mb-2">John Hardin</h3>
                            <p class="text-orange-400">Head Barista</p>
                        </div>
                        <div class="team-member bg-white/10 backdrop-blur-md rounded-xl p-6 text-white text-center transition-transform duration-300">
                            <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-cyan-400">
                                <img src="images/roaster.jpg" alt="Rihanna Watson" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-bold mb-2">Rihanna Watson</h3>
                            <p class="text-cyan-400">Roaster</p>
                        </div>
                    </div>
                </div>

                <!-- Our Values Section -->
                <div class="animate-section bg-white/10 backdrop-blur-md rounded-2xl p-8 text-white" style="--order: 3">
                    <h2 class="text-4xl font-bold mb-6 text-orange-400">Our Values</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-4 bg-cyan-400 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Quality First</h3>
                            <p>Sourcing high-quality, sustainable coffee beans</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-4 bg-orange-400 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Eco-Friendly</h3>
                            <p>Reducing our environmental impact</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-4 bg-cyan-400 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Community Focus</h3>
                            <p>Supporting our local community</p>
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