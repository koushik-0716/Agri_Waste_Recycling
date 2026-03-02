<?php
session_start();
$page_title = 'Login - Agri Waste Recycling Platform';
include 'includes/header.php';
?>

<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back</h1>
            <p class="text-gray-600">Sign in to your account</p>
            <?php if (isset($_GET['error'])): ?>
                <div class="mt-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
                    <?php
                    switch($_GET['error']) {
                        case 'invalid_password':
                            echo 'Invalid password. Please try again.';
                            break;
                        case 'user_not_found':
                            echo 'User not found. Please check your email.';
                            break;
                        default:
                            echo 'An error occurred. Please try again.';
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>

        <form id="loginForm" class="space-y-6" onsubmit="return false">
            <input type="hidden" name="login" value="1">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                <i class="fas fa-sign-in-alt mr-2"></i>Sign In
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600">Don't have an account? <a href="register.php" class="text-green-600 hover:text-green-500 font-medium">Register here</a></p>
        </div>

        <div class="mt-4 text-center">
            <a href="index.php" class="text-gray-500 hover:text-gray-700"><i class="fas fa-home mr-1"></i>Back to Home</a>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
