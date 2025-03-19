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
    <title>Contact Us - ALEXA COFFEE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes gradientBg {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .gradient-animation {
            background: linear-gradient(45deg, #0891b2, #7c3aed, #0891b2);
            background-size: 200% 200%;
            animation: gradientBg 15s ease infinite;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gradient-to-br from-slate-900 via-gray-900 to-black min-h-screen">
    <!-- Animated Background Elements -->
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
        </div>
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
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
    <!-- Main Content -->
    <div class="relative z-10">
        <!-- Navigation -->
        <nav class="fixed w-full z-50 bg-black/20 backdrop-blur-lg border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <div class="relative group">
                            <img src="images/Alexa_Coffee_shop__4_-removebg-preview.png" 
                                 alt="Alexa Coffee Logo" 
                                 class="h-16 w-16 rounded-full object-cover transform transition-all duration-300 group-hover:scale-110"
                            >
                            <div class="absolute inset-0 rounded-full bg-white/10 group-hover:bg-white/20 transition-colors duration-300"></div>
                        </div>
                        <h1 class="text-4xl font-bold tracking-tight text-white">
                            <span class="text-cyan-400 hover:text-cyan-300 transition-colors duration-300">COF</span>
                            <span class="text-orange-400 hover:text-orange-300 transition-colors duration-300">FEE</span>
                        </h1>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="./home.php" class="text-gray-300 hover:text-white transition-colors duration-300">HOME</a>
                        <a href="./menu.php" class="text-gray-300 hover:text-white transition-colors duration-300">MENU</a>
                        <a href="./services.php" class="text-gray-300 hover:text-white transition-colors duration-300">SERVICES</a>
                        <a href="./contacts.php" class="text-white relative">
                            CONTACTS
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-cyan-500 to-purple-500"></span>
                        </a>
                        <a href="./about us.php" class="text-gray-300 hover:text-white transition-colors duration-300">ABOUT US</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center">
                        <button class="text-gray-300 hover:text-white p-2">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Contact Section -->
        <div class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-5xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 via-cyan-400 to-cyan-400">
                    Contact Us
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    We're here to help and answer any questions you might have.
                </p>
            </div>

            <!-- Contact Container -->
            <div class="grid md:grid-cols-2 gap-12 items-start">
                <!-- Contact Form -->
                <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-8 border border-white/10 shadow-2xl">
                    <h3 class="text-2xl font-semibold text-white mb-8">Send Us a Message</h3>
                      <form action="BACKEND.php" method="post">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-300">Name</label>
                                <input type="text" name="name"
                                       class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-400 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 transition-all duration-300"
                                      required placeholder="Your name">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-300">Email</label>
                                <input type="email"  name="email"
                                required class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-400 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 transition-all duration-300"
                                       placeholder="your@email.com">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-300">Phone</label>
                                <input type="tel" name="contact"
                                required class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-400 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 transition-all duration-300"
                                       placeholder="Your phone number">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-300">Subject</label>
                                <input type="text" name="subject" 
                                required class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-400 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 transition-all duration-300"
                                       placeholder="Message subject">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-300">Message</label>
                            <input type ="text" rows="5" 
                            required class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-gray-400 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 transition-all duration-300"
                            placeholder="Your message..." name="message">
                            
                        </div>
                        <button type="submit" 
                        class="group relative w-full py-4 px-6 rounded-lg 
                               bg-gradient-to-r from-cyan-500 to-cyan-500 
                               text-white font-semibold overflow-hidden
                               transform transition-all duration-300 
                               hover:from-cyan-600 hover:to-cyan-600
                               active:scale-95
                               focus:outline-none focus:ring-2 focus:ring-cyan-500/50
                               disabled:opacity-50 disabled:cursor-not-allowed">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="transition-transform duration-300 group-hover:translate-x-1">
                            Send my Message
                        </span>
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" 
                             fill="none" 
                             stroke="currentColor" 
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </div>
                </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-8 border border-white/10 shadow-2xl">
                    <h3 class="text-2xl font-semibold text-white mb-8">Get in Touch</h3>
                    <div class="space-y-8">
                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="p-3 bg-cyan-500/10 rounded-lg">
                                <svg class="h-6 w-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-white">Email</h4>
                                <p class="text-gray-400 mt-1">contactus@example.com</p>
                                <p class="text-gray-400">support@example.com</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-4">
                            <div class="p-3 bg-purple-500/10 rounded-lg">
                                <svg class="h-6 w-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-white">Phone</h4>
                                <p class="text-gray-400 mt-1">+256 700 222 345</p>
                                <p class="text-gray-400">+256 700 222 346</p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-start space-x-4">
                            <div class="p-3 bg-cyan-500/10 rounded-lg">
                                <svg class="h-6 w-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-white">Location</h4>
                                <p class="text-gray-400 mt-1">#33, munyonyo rad, wavamuno</p>
                                <p class="text-gray-400">Kampala, Uganda</p>
                            </div>
                        </div>
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