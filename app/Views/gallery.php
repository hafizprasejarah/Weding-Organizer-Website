<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Montserrat:wght@300..800&display=swap" rel="stylesheet">
</head>

<body class="bg-[#f9cfd3] w-full flex justify-center">

<div class="w-full max-w-525">

    <!-- Navbar -->
    <section class="fixed top-0 left-0 w-full z-50">
        <?= $this->include('layout/navbar') ?>
    </section>

    <!-- Gallery Section -->
    <section class="pt-32 pb-24 bg-gradient-to-b from-[#fdecef] to-[#f8cfd6]">
        <div class="max-w-6xl mx-auto px-6">

            <!-- Title -->
            <h2 class="text-center logo-font text-[#b43b5c] text-[40px] md:text-[48px] mb-12">
                Love Gallery
            </h2>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <?php foreach ($gallery as $item): ?>

                    <div class="relative rounded-[18px] overflow-hidden shadow-md group">
                        <img src="<?= base_url('assets/bunga.jpg') ?>"
                            class="w-full h-[280px] object-cover group-hover:scale-110 transition duration-500">

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#b43b5c]/70 via-[#b43b5c]/20 to-transparent opacity-0 group-hover:opacity-100 transition">
                            <div class="absolute bottom-0 p-6 text-white">
                                <h3 class="text-[22px] font-serif mb-2">
                                    Wedding Planning
                                </h3>
                                <p class="text-sm opacity-90">
                                    Full planning & coordination for your special day.
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?> 

            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                <?= $pager->links('gallery', 'tailwind_pagination') ?>
            </div>

        </div>
    </section>

    <?= $this->include('layout/footer') ?>

</div>

</body>
</html>
