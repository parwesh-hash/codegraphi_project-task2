
<?php
session_start();
// require 'config.php';

$message = '';

if (isset($_POST['register'])) {
    $mobileno = $_POST['mobileno'] ?? '';
    $fullname = $_POST['fullname'] ?? '';
    $shop = $_POST['shop'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($password !== $confirm_password) {
        $message = "Passwords do not match!";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (mobileno, fullname, shop, email, password) VALUES (?, ?, ?, ?, ?)");
        if ($stmt->execute([$mobileno, $fullname, $shop, $email, $hashedPassword])) {
            $_SESSION['username'] = $fullname;
            header("Location: dashboard.php");
            exit;
        } else {
            $message = "Registration failed. Try again!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CodeGraphi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen flex items-center justify-center bg-gray-100">

  <div class="w-full max-w-4xl bg-white shadow-lg rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

    <!-- Left Section (Always Visible) -->
    <div class="bg-[#003049] text-white flex flex-col justify-center items-center p-8">
      <h2 class="text-3xl font-bold mb-4 text-center md:text-left">Welcome to CodeGraphi</h2>
      <p class="text-lg text-blue-100 text-center md:text-left">
        Secure fintech portal for services like BBPS, AEPS, and DMT with seamless business transactions.
      </p>
    </div>

    <!-- Right Section (Register Form) -->
    <div class="p-8 flex flex-col items-center w-full">

      <!-- Logo -->
      <img src="../images/new_code_graphi_logo1.png" alt="CodeGraphi Logo" class="mb-4 w-32">

      <!-- Heading -->
      <h1 class="text-2xl font-bold mb-4 text-center">Create your account</h1>

      <!-- Tabs -->
      <div class="flex space-x-6 mb-6 justify-center">
        <a href="login.php" class="text-gray-500 hover:text-blue-600">Login</a>
        <a href="register.php" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1">Register</a>
      </div>

      <!-- Display error message -->
      <?php if (!empty($message)) : ?>
          <p class="text-red-600 text-sm mb-4"><?php echo $message; ?></p>
      <?php endif; ?>

      <!-- Form -->
      <form action="register.php" method="POST" class="space-y-4 w-full max-w-sm">
        <input type="hidden" name="action" value="register">

        <input type="tel" name="mobileno" placeholder="Mobile No" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">

        <input type="text" name="fullname" placeholder="Full Name" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">

        <input type="text" name="shop" placeholder="Shop Name" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">

        <input type="email" name="email" placeholder="Email ID" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">

        <input type="password" name="password" placeholder="Password" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">

        <input type="password" name="confirm_password" placeholder="Confirm Password" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">

        <button type="submit" name="register"
            class="w-full bg-[#800080] text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Register
        </button>

        <p class="text-center text-gray-500 text-sm mt-2">
            Already have an account? <a href="login.php" class="text-blue-600 hover:underline">Login here</a>
        </p>
      </form>

    </div>
  </div>

</body>

</html>
