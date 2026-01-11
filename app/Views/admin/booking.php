<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Booking</title>

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
            <a href="<?= base_url('admin/dashboard') ?>" class="block px-4 py-2 rounded-lg hover:bg-white/20">Dashboard</a>
            <a href="<?= base_url('admin/package') ?>" class="block px-4 py-2 rounded-lg hover:bg-white/20">Kelola Paket</a>
            <a href="<?= base_url('admin/gallery') ?>" class="block px-4 py-2 rounded-lg hover:bg-white/20">Kelola Gallery</a>
            <a href="<?= base_url('admin/booking') ?>" class="block px-4 py-2 rounded-lg bg-white/20">Booking</a>
            <a href="<?= base_url('admin/contact') ?>" class="block px-4 py-2 rounded-lg hover:bg-white/20">Pesan Kontak</a>
        </nav>
    </aside>

    <!-- Content -->
    <main class="flex-1 p-8">

        <h1 class="text-3xl font-bold text-gray-700 mb-6">
            Kelola Booking
        </h1>

        <div class="bg-white rounded-xl shadow p-6 overflow-x-auto">
            <table class="w-full border-collapse min-w-[700px]">
                <thead>
                    <tr class="border-b text-gray-500">
                        <th class="py-3 text-left">Nama</th>
                        <th class="py-3 text-left">Email</th>
                        <th class="py-3 text-left">Tanggal</th>
                        <th class="py-3 text-left">Paket</th>
                        <th class="py-3 text-left">Status</th>
                        <th class="py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="border-b">
                        <td class="py-3">Alya & Dimas</td>
                        <td class="py-3">alya@mail.com</td>
                        <td class="py-3">12-08-2026</td>
                        <td class="py-3">Gold</td>
                        <td class="py-3">
                            <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-sm">
                                Pending
                            </span>
                        </td>
                        <td class="py-3 text-center space-x-2">
                            <button class="px-3 py-1 rounded bg-green-500 text-white text-sm">
                                Confirm
                            </button>
                            <button class="px-3 py-1 rounded bg-red-500 text-white text-sm">
                                Reject
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </main>

</div>

</body>
</html>
