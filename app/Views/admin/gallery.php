<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Gallery</title>

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
                <a href="<?= base_url('admin/gallery') ?>" class="block px-4 py-2 rounded-lg bg-white/20">Kelola Gallery</a>
                <a href="<?= base_url('admin/booking') ?>" class="block px-4 py-2 rounded-lg hover:bg-white/20">Booking</a>
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-8">

            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-700">Kelola Gallery</h1>

                <a href="<?= base_url('admin/gallery/tambah') ?>">
                    <button class="px-5 py-3 rounded-lg bg-[#b43b5c] text-white hover:bg-[#9f334f] transition">
                        + Upload Foto
                    </button>
                </a>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="<?= base_url('assets/planning.jpg') ?>" class="w-full h-40 object-cover">
                    <div class="p-4 flex justify-between">
                        <span class="text-sm text-gray-600">planning.jpg</span>
                        <div class="space-x-2">
                            <button class="text-blue-500 text-sm">Edit</button>
                            <button class="text-red-500 text-sm">Hapus</button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-[20px] font-semibold">dsankdawukdnsa kdnasudhwda</h3>
                        <p class="py-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores adipisci eos enim sint dignissimos quos molestiae voluptatum reiciendis rem eum!</p>
                    </div>
                </div>

            </div>

        </main>

    </div>

</body>

</html>