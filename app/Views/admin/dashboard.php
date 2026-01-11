<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300..800&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 font-[Montserrat]">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#b43b5c] text-white flex flex-col">
        <div class="p-6 text-2xl font-bold border-b border-white/20">
            Admin Panel
        </div>

        <nav class="flex-1 p-4 space-y-3">
            <a href="#" class="block px-4 py-2 rounded-lg bg-white/20">
                Dashboard
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/20">
                Kelola Paket
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/20">
                Kelola Gallery
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/20">
                Booking
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/20">
                Pesan Kontak
            </a>
        </nav>

        <div class="p-4 border-t border-white/20">
            <a href="<?= base_url('admin/logout') ?>" class="block text-center bg-white text-[#b43b5c] py-2 rounded-lg font-semibold">
                Logout
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">

        <h1 class="text-3xl font-bold text-gray-700 mb-8">
            Dashboard
        </h1>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total Booking</p>
                <h3 class="text-3xl font-bold text-[#b43b5c]">24</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Pesan Masuk</p>
                <h3 class="text-3xl font-bold text-[#b43b5c]">12</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Gallery</p>
                <h3 class="text-3xl font-bold text-[#b43b5c]">36</h3>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Paket</p>
                <h3 class="text-3xl font-bold text-[#b43b5c]">3</h3>
            </div>
        </div>

        <!-- Table Example -->
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">
                Booking Terbaru
            </h2>

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="py-3 text-gray-500">Nama</th>
                        <th class="py-3 text-gray-500">Tanggal</th>
                        <th class="py-3 text-gray-500">Paket</th>
                        <th class="py-3 text-gray-500">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-3">Alya & Dimas</td>
                        <td class="py-3">12-08-2026</td>
                        <td class="py-3">Gold</td>
                        <td class="py-3 text-green-600 font-semibold">Confirmed</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

</div>

</body>
</html>
