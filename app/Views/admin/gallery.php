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



        <?= $this->include('admin/layout/navbar') ?>


        <main class="flex-1 p-8 relative">
            <?php if (session()->getFlashdata('error')) : ?>
                <div id="flash-message"
                    class="fixed top-6 left-1/2 -translate-x-1/2 z-50
               flex items-center gap-3
               px-6 py-4 rounded-xl
               bg-red-100 text-red-700 border border-red-300
               shadow-lg transition-all duration-500">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span><?= session()->getFlashdata('error') ?></span>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')) : ?>
                <div id="flash-message"
                    class="fixed top-6 left-1/2 -translate-x-1/2 z-50
               flex items-center gap-3
               px-6 py-4 rounded-xl
               bg-green-100 text-green-700 border border-green-300
               shadow-lg transition-all duration-500">
                    <i class="fa-solid fa-circle-check"></i>
                    <span><?= session()->getFlashdata('success') ?></span>
                </div>
            <?php endif; ?>

            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-700">Kelola Gallery</h1>

                <a href="<?= base_url('admin/gallery/tambah') ?>">
                    <button class="px-5 py-3 rounded-lg bg-[#b43b5c] text-white hover:bg-[#9f334f] transition">
                        + Upload Foto
                    </button>
                </a>
            </div>

            <!-- Gallery Grid -->
            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <?php if (!empty($gallery)) : ?>
                    <?php foreach ($gallery as $item) : ?>

                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden group">

                            <!-- Image -->
                            <div class="relative">
                                <img
                                    src="<?= base_url('uploads/gallery/' . esc($item['image'])) ?>"
                                    class="w-full h-48 object-cover">

                                <!-- Hover Actions -->
                                <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                                    <div class="space-x-3">
                                        <a href="<?= base_url('admin/gallery/edit/' . $item['id']) ?>"
                                            class="px-3 py-1 bg-blue-500 text-white text-sm rounded">
                                            Edit
                                        </a>
                                        <a href="<?= base_url('admin/gallery/delete/' . $item['id']) ?>"
                                            onclick="return confirm('Yakin hapus foto ini?')"
                                            class="px-3 py-1 bg-red-500 text-white text-sm rounded">
                                            Hapus
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-4">
                                <span class="text-xs uppercase text-[#b43b5c] font-semibold">
                                    <?= esc($item['category']) ?>
                                </span>

                                <p class="mt-2 text-sm text-gray-600 line-clamp-3">
                                    <?= esc($item['description']) ?>
                                </p>

                                <p class="mt-3 text-xs text-gray-400">
                                    <?= date('d M Y', strtotime($item['created_at'])) ?>
                                </p>
                            </div>

                        </div>

                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="col-span-full text-center text-gray-500 py-10">
                        Belum ada data gallery
                    </div>
                <?php endif; ?>

            </div>

            <div class="mt-10 flex justify-center">
                <?= $pager->links() ?>
            </div>
        </main>

    </div>

</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const flash = document.getElementById('flash-message');
        if (flash) {
            setTimeout(() => {
                flash.classList.add('opacity-0', '-translate-y-4');
                setTimeout(() => flash.remove(), 500);
            }, 2000);
        }
    });
</script>

</html>