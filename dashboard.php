<?php
session_start();

// // Dummy data for demo
// $transactions = [
//   ['date' => '2025-09-29', 'type' => 'BBPS Bill Payment', 'amount' => '₹500', 'status' => 'Success'],
//   ['date' => '2025-09-28', 'type' => 'AEPS Withdrawal', 'amount' => '₹2000', 'status' => 'Success'],
//   ['date' => '2025-09-27', 'type' => 'DMT Transfer', 'amount' => '₹1000', 'status' => 'Pending'],
// ];
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard- CodeGraphi</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">

  <!-- Layout Wrapper -->
  <div class="min-h-screen flex flex-col md:flex-row">

    <!-- Sidebar -->
    <aside class="bg-white w-full md:w-64 p-6 shadow-md">
      <img src="../images/new_code_graphi_logo1.png" alt="CodeGraphi Logo" class="mb-6 w-32 mx-auto md:mx-0">
      <nav class="space-y-2 text-gray-800 text-sm">
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fas fa-home mr-2 text-[#6a040f]"></i>Home</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fas fa-fingerprint mr-2 text-[#6a040f]"></i>AePS Settlement</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fas fa-exchange-alt mr-2 text-[#6a040f]"></i>AePS Wallet Transfer</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fa-solid fa-right-left mr-2 text-[#6a040f]"></i>DMT</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fas fa-bolt mr-2 text-[#6a040f]"></i>Express Payout</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fas fa-exchange-alt mr-2 text-[#6a040f]"></i>DMT S1</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fas fa-database mr-2 text-[#6a040f]"></i>CMS</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fas fa-credit-card mr-2 text-[#6a040f]"></i>Credit Card Apply</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fas fa-percentage mr-2 text-[#6a040f]"></i>Commission Plans</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fas fa-wallet mr-2 text-[#6a040f]"></i>Fund</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fas fa-history mr-2 text-[#6a040f]"></i>Fund History</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-blue-100"><i
            class="fa-solid fa-mobile-screen mr-2 text-[#6a040f]"></i>mobile recharge</a>
      </nav>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 p-6">

      <!-- Top Bar -->

      <header class="bg-white text-black flex justify-between items-center px-6 py-2 rounded shadow mb-4">
        <div class="flex items-center space-x-4">
          <span><i class="fas fa-fingerprint text-blue-500 mr-1"></i>AePS ₹0.00</span>
          <span>
            <i class="fas fa-wallet text-blue-500 mr-1"></i>
            ₹179.40
            <i class="fas fa-plus bg-green-500 text-white ml-1"></i>
          </span>
        </div>

        <div class="flex items-center space-x-4">
          <span>Welcome, Test</span>
          <a href="logout.php"
            class="w-10 h-10 rounded-full overflow-hidden border-2 border-gray-300 hover:border-blue-500 cursor-pointer">
            <img src="../images/profile.jpg" alt="Profile" class="w-full h-full object-cover">
          </a>
        </div>

      </header>
      <div class="bg-white p-1 rounded shadow mb-4">
        <p class="text-right">
          <span class="text-red-600 font-semibold">Notification:</span> Employees your shop to become one-stop
          destination for banking.
        </p>
      </div>


      <!-- Summary Cards -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-[#6a040f] text-white p-4 rounded shadow flex flex-col items-center justify-center text-center">
          <span>Today Transactions <br>₹0</span>
        </div>
        <div class="bg-[#6a040f] text-white p-4 rounded shadow flex flex-col items-center justify-center text-center">
          <span>Today Payout <br>₹0</span>
        </div>
        <div class="bg-[#6a040f] text-white p-4 rounded shadow flex flex-col items-center justify-center text-center">
          <span>Wallet TopUp <br>₹0</span>
        </div>
        <div class="bg-[#6a040f] text-white p-4 rounded shadow flex flex-col items-center justify-center text-center">
          <span>Today Earning <br>₹0</span>
        </div>
      </div>


      <!-- Services Grid -->
      <div class="grid grid-cols-2 md:grid-cols-6 gap-4 mb-6 text-sm">
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-fingerprint text-[#6a040f] text-3xl mb-2 block"></i>
          AEPS
        </div>
        <!-- <i class="fa-solid fa-right-left"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fa-solid fa-right-left text-[#6a040f] text-3xl mb-2 block"></i>
          DMT
        </div>
        <!-- <i class="fa-solid fa-right-left"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fa-solid fa-right-left text-[#6a040f] text-3xl mb-2 block"></i>
          DMT S1
        </div>
        <!-- <i class="fa-solid fa-mobile-screen"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fa-solid fa-mobile-screen text-[#6a040f] text-3xl mb-2 block"></i>
          Mobile Recharge
        </div>
        <!-- <i class="fa-solid fa-folder"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fa-solid fa-folder text-[#6a040f] text-3xl mb-2 block"></i>
          PPI
        </div>
        <!-- <i class="fa-solid fa-wifi"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fa-solid fa-wifi text-[#6a040f] text-3xl mb-2 block"></i>
          Recharge
        </div>
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-shield-alt text-[#6a040f] text-3xl mb-2 block"></i>
          Insurance
        </div>
        <!-- <i class="fas fa-car-side"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-car-side text-[#6a040f] text-3xl mb-2 block"></i>
          FASTag
        </div>
        <!-- <i class="fa-solid fa-mobile"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fa-solid fa-mobile text-[#6a040f] text-3xl mb-2 block"></i>
          Postpaid
        </div>

        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-credit-card text-[#6a040f] text-3xl mb-2 block"></i>
          Credit Card
        </div>

        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-bolt text-[#6a040f] text-3xl mb-2 block"></i>
          Electricity
        </div>

        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-tint text-[#6a040f] text-3xl mb-2 block"></i>
          Water
        </div>
        <!-- <i class="fa-solid fa-phone"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fa-solid fa-phone text-[#6a040f] text-3xl mb-2 block"></i>
          landline
        </div>
        <!-- <i class="fa-solid fa-signal"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fa-solid fa-signal text-[#6a040f] text-3xl mb-2 block"></i>
          DTH
        </div>

        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-fire text-[#6a040f] text-3xl mb-2 block"></i>
          Gas Bill
        </div>

        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-database text-[#6a040f] text-3xl mb-2 block"></i>
          CMS
        </div>
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-credit-card text-[#6a040f] text-3xl mb-2 block"></i>
          CC Apply
        </div>

        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-receipt text-[#6a040f] text-3xl mb-2 block"></i>
          POS
        </div>
        <!-- <i class="fa-solid fa-building-columns"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fa-solid fa-building-columns text-[#6a040f] text-3xl mb-2 block"></i>
          mATM
        </div>

        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-fingerprint text-[#6a040f] text-3xl mb-2 block"></i>
          Aadhaar Pay
        </div>

        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-bus text-[#6a040f] text-3xl mb-2 block"></i>
          Bus Booking
        </div>

        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-train text-[#6a040f] text-3xl mb-2 block"></i>
          Train Booking
        </div>

        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fas fa-plane text-[#6a040f] text-3xl mb-2 block"></i>
          Flight Booking
        </div>
        <!-- <i class="fa-solid fa-suitcase-rolling"></i> -->
        <div class="bg-white p-4 text-center shadow rounded">
          <i class="fa-solid fa-suitcase-rolling text-[#6a040f] text-3xl mb-2 block"></i>
          Tour Package
        </div>
        <!-- Add more service cards with icons as needed -->
      </div>

    </main>
  </div>

</body>

</html>