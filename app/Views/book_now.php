<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>

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

    <!-- Book Now Section -->
    <section class="pt-32 pb-24 bg-gradient-to-b from-[#fdecef] to-[#f8cfd6]">
        <div class="max-w-4xl mx-auto px-6">

            <!-- Title -->
            <h2 class="text-center logo-font text-[#b43b5c] text-[42px] md:text-[52px] mb-4">
                Book Your Special Day
            </h2>

            <p class="text-center text-gray-600 mb-12">
                Wujudkan pernikahan impian Anda bersama kami 💍
            </p>

            <!-- Booking Card -->
            <div class="bg-white rounded-[28px] shadow-lg p-10">

                <form action="#" method="post" class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Nama -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">
                            Nama Lengkap
                        </label>
                        <input type="text" required
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">
                            Email
                        </label>
                        <input type="email" required
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none">
                    </div>

                    <!-- WhatsApp -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">
                            No. WhatsApp
                        </label>
                        <input type="text" required
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none">
                    </div>

                    <!-- Tanggal -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">
                            Tanggal Pernikahan
                        </label>
                        <input type="date" required
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none">
                    </div>

                    <!-- Paket -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-600 mb-1">
                            Pilih Paket
                        </label>
                        <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none">
                            <option>Silver Package</option>
                            <option>Gold Package</option>
                            <option>Platinum Package</option>
                        </select>
                    </div>

                    <!-- Catatan -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-600 mb-1">
                            Catatan Tambahan
                        </label>
                        <textarea rows="4"
                                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none"></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="md:col-span-2 mt-4">
                        <button type="submit"
                                class="w-full py-4 rounded-full bg-[#b43b5c] text-white hover:bg-[#9f334f] transition font-semibold text-lg">
                            Book Now
                        </button>
                    </div>

                </form>

                <!-- WhatsApp CTA -->
                <p class="text-center text-sm text-gray-500 mt-6">
                    Atau langsung hubungi kami via
                    <a href="https://wa.me/6281234567890" class="text-[#b43b5c] font-semibold hover:underline">
                        WhatsApp
                    </a>
                </p>

            </div>

        </div>
    </section>

    <?= $this->include('layout/footer') ?>

</div>

</body>
</html>
