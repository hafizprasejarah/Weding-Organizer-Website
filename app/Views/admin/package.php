<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Paket</title>

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
            <a href="<?= base_url('admin/package') ?>" class="block px-4 py-2 rounded-lg bg-white/20">Kelola Paket</a>
            <a href="<?= base_url('admin/gallery') ?>" class="block px-4 py-2 rounded-lg hover:bg-white/20">Kelola Gallery</a>
            <a href="<?= base_url('admin/booking') ?>" class="block px-4 py-2 rounded-lg hover:bg-white/20">Booking</a>
        </nav>
    </aside>

    <!-- Content -->
    <main class="flex-1 p-8">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-700">Kelola Paket</h1>
            <button class="px-5 py-3 rounded-lg bg-[#b43b5c] text-white hover:bg-[#9f334f] transition">
                + Tambah Paket
            </button>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-b text-gray-500">
                        <th class="py-3 text-left">Nama Paket</th>
                        <th class="py-3 text-left">Harga</th>
                        <th class="py-3 text-left">Deskripsi</th>
                        <th class="py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="border-b">
                        <td class="py-3">Silver</td>
                        <td class="py-3">Rp 15.000.000</td>
                        <td class="py-3">Basic wedding service</td>
                        <td class="py-3 text-center space-x-2">
                            <button class="px-3 py-1 rounded bg-blue-500 text-white text-sm">Edit</button>
                            <button class="px-3 py-1 rounded bg-red-500 text-white text-sm">Hapus</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </main>

</div>

</body>
</html>
