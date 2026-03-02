<?php
session_start();
$page_title = 'Agri Waste Recycling Platform';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-400 to-blue-500 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Sustainable Agriculture Through Waste Recycling</h1>
            <p class="text-xl md:text-2xl mb-8">Connect farmers, recyclers, and industries in a circular economy for a greener future</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="register.php" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-green-100 transition duration-300">Join Now</a>
                <a href="#features" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-green-100 transition duration-300">Learn More</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">About Our Platform</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">We bridge the gap between farmers, compost makers, and industries, promoting sustainability and reducing environmental pollution from agricultural waste burning.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-green-50 rounded-lg">
                    <i class="fas fa-tractor text-4xl text-green-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">For Farmers</h3>
                    <p class="text-gray-600">List your agricultural waste and get fair prices while contributing to environmental conservation.</p>
                </div>
                <div class="text-center p-6 bg-blue-50 rounded-lg">
                    <i class="fas fa-recycle text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">For Recyclers</h3>
                    <p class="text-gray-600">Access raw materials efficiently and sell processed products to industries.</p>
                </div>
                <div class="text-center p-6 bg-purple-50 rounded-lg">
                    <i class="fas fa-industry text-4xl text-purple-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">For Industries</h3>
                    <p class="text-gray-600">Purchase compost, biogas, and organic fertilizers directly from verified recyclers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Key Features</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="fas fa-handshake text-3xl text-green-600 mb-4"></i>
                    <h3 class="text-lg font-semibold mb-2">Transparent Transactions</h3>
                    <p class="text-gray-600">Secure and transparent buying/selling process.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="fas fa-mobile-alt text-3xl text-blue-600 mb-4"></i>
                    <h3 class="text-lg font-semibold mb-2">Mobile Friendly</h3>
                    <p class="text-gray-600">Access the platform from any device, anywhere.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="fas fa-leaf text-3xl text-green-600 mb-4"></i>
                    <h3 class="text-lg font-semibold mb-2">Eco-Friendly</h3>
                    <p class="text-gray-600">Reduce pollution and promote circular economy.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="fas fa-chart-line text-3xl text-purple-600 mb-4"></i>
                    <h3 class="text-lg font-semibold mb-2">Real-time Updates</h3>
                    <p class="text-gray-600">Get instant notifications on transactions and listings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Get Started Today</h2>
            <p class="text-lg text-gray-600 mb-8">Join thousands of users in creating a sustainable agricultural ecosystem.</p>
            <a href="register.php" class="bg-green-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Create Account</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
