<?php
session_start();
$page_title = 'Register - Agri Waste Recycling Platform';
include 'includes/header.php';
?>

<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-lg">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Create Account</h1>
            <p class="text-gray-600">Join our sustainable agriculture community</p>
            <?php if (isset($_GET['error'])): ?>
                <div class="mt-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
                    <?php
                    switch($_GET['error']) {
                        case 'registration_failed':
                            echo 'Registration failed. Please try again.';
                            break;
                        default:
                            echo 'An error occurred. Please try again.';
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>

        <form id="registerForm" class="space-y-6" onsubmit="return false">
            <input type="hidden" name="register" value="1">
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" id="name" name="name" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            </div>

            <div>
                <label for="role" class="block text-sm font-medium text-gray-700 mb-1">I am a</label>
                <select id="role" name="role" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    <option value="">Select your role</option>
                    <option value="farmer">Farmer</option>
                    <option value="recycler">Recycler/Compost Maker</option>
                    <option value="industry">Industry/Buyer</option>
                </select>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                    <input type="tel" id="phone" name="phone"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                </div>
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                    <input type="text" id="address" name="address"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                </div>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                <i class="fas fa-user-plus mr-2"></i>Create Account
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600">Already have an account? <a href="login.php" class="text-green-600 hover:text-green-500 font-medium">Login here</a></p>
        </div>

        <div class="mt-4 text-center">
            <a href="index.php" class="text-gray-500 hover:text-gray-700"><i class="fas fa-home mr-1"></i>Back to Home</a>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
