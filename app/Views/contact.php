<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

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

    <!-- Contact Section -->
    <section class="pt-32 pb-24 bg-gradient-to-b from-[#fdecef] to-[#f8cfd6]">
        <div class="max-w-5xl mx-auto px-6">

            <!-- Title -->
            <h2 class="text-center logo-font text-[#b43b5c] text-[40px] md:text-[48px] mb-12">
                Kontak Kami
            </h2>

            <!-- Contact Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <!-- Contact Info -->
                <div class="bg-white rounded-[24px] shadow-md p-8">
                    <h3 class="text-2xl font-semibold text-[#b43b5c] mb-6">
                        Informasi Kontak
                    </h3>

                    <ul class="space-y-4 text-gray-700">
                        <li>
                            <strong>📍 Alamat:</strong><br>
                            Jl. Mawar Indah No. 25, Jakarta
                        </li>
                        <li>
                            <strong>📞 Telepon / WhatsApp:</strong><br>
                            <a href="https://wa.me/6281234567890" class="text-[#b43b5c] hover:underline">
                                +62 812-3456-7890
                            </a>
                        </li>
                        <li>
                            <strong>📧 Email:</strong><br>
                            <a href="mailto:wedding@organizer.com" class="text-[#b43b5c] hover:underline">
                                wedding@organizer.com
                            </a>
                        </li>
                        <li>
                            <strong>⏰ Jam Operasional:</strong><br>
                            Senin – Sabtu (09.00 – 18.00)
                        </li>
                    </ul>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-[24px] shadow-md p-8">
                    <h3 class="text-2xl font-semibold text-[#b43b5c] mb-6">
                        Kirim Pesan
                    </h3>

                    <form action="#" method="post" class="space-y-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">
                                Nama Lengkap
                            </label>
                            <input type="text"
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">
                                Email
                            </label>
                            <input type="email"
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">
                                Pesan
                            </label>
                            <textarea rows="4"
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none"></textarea>
                        </div>

                        <button type="submit"
                                class="w-full py-3 rounded-full bg-[#b43b5c] text-white hover:bg-[#9f334f] transition font-semibold">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </section>

    <?= $this->include('layout/footer') ?>

</div>

</body>
</html>
