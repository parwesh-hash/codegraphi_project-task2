
<?php
session_start();
// require 'config.php';

$message = '';

if (isset($_POST['login'])) {
    $number = $_POST['Number'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        $message = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CodeGraphi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen flex items-center justify-center bg-gray-100">

    <div class="w-full max-w-4xl bg-white shadow-lg rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

        <!-- Left Section -->
        <div class="bg-[#003049] text-white flex flex-col justify-center items-center p-8">
            <h2 class="text-3xl font-bold mb-4 text-center md:text-left">Welcome to CodeGraphi</h2>
            <p class="text-lg text-blue-100 text-center md:text-left">Secure fintech login portal for services like BBPS, AEPS, and DMT with seamless business transaction experience.</p>
        </div>

        <!-- Right Section (Form) -->
        <div class="p-8 flex flex-col items-center justify-center">
            <!-- Logo / Image -->
            <img src="../images/new_code_graphi_logo1.png" alt="CodeGraphi Logo" class="mb-4 w-32 md:w-40">

            <h1 class="text-2xl font-bold mb-4 text-center">Sign in to your account</h1>

            <!-- Tabs -->
            <div class="flex space-x-6 mb-6 p-2 justify-center">
                <a href="login.php" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1">Login</a>
                <a href="register.php" class="text-gray-500 hover:text-blue-600">Register</a>
            </div>

            <!-- Display error message -->
            <?php if (!empty($message)) : ?>
                <p class="text-red-600 text-sm mb-4"><?php echo $message; ?></p>
            <?php endif; ?>

            <!-- Form -->
            <form action="auth.php" method="POST" class="space-y-4 w-full max-w-sm">
                <input type="hidden" name="action" value="login">

                <!-- Phone Number -->
                <div>
                    <input type="tel" name="phoneno" required placeholder="Phone Number"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Password -->
                <div>
                    <input type="password" name="password" required placeholder="Password"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex justify-between items-center text-sm">
                    <label class="flex items-center text-gray-600">
                        <input type="checkbox" name="remember" class="mr-2">
                        Remember Me
                    </label>
                    <a href="forgot_password.php" class="text-blue-600 hover:underline">Forgot Password?</a>
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full bg-[#800080] text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Login
                </button>

                <p class="text-center text-gray-500 text-sm mt-2">
                    Don't have an account? <a href="register.php" class="text-blue-600 hover:underline">Register here</a>
                </p>
            </form>
        </div>
    </div>

</body>

</html>
