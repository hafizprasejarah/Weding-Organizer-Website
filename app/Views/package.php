<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Package</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<body class="bg-[#f9cfd3] w-full flex justify-center">

    <div class="w-full max-w-525 relative">

        <!-- Navbar -->
        <section class="fixed top-0  w-full z-99"> <?= $this->include('layout/navbar') ?></section>


        <!-- Package Section -->
        <section class="pt-32 pb-24 bg-gradient-to-b from-[#fdecef] to-[#f8cfd6]">
            <div class="max-w-6xl mx-auto px-6">

                <!-- Title -->
                <h2 class="text-center logo-font text-[#b43b5c] text-[40px] md:text-[48px] mb-16">
                    Wedding Packages
                </h2>

                <!-- Package Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                    <!-- SILVER -->
                    <div class="relative bg-white rounded-[24px] shadow-md p-8 text-center">
                        <h3 class="text-2xl font-semibold text-gray-500 mb-4">
                            Silver Package
                        </h3>

                        <p class="text-[#b43b5c] text-3xl font-bold mb-6">
                            Rp 15.000.000
                        </p>

                        <ul class="text-gray-600 space-y-3 mb-8">
                            <li>✔ Wedding Organizer</li>
                            <li>✔ Basic Decoration</li>
                            <li>✔ Sound System</li>
                            <li>✔ MC Wedding</li>
                        </ul>

                        <button class="w-full py-3 rounded-full border border-gray-400 text-gray-600 hover:bg-gray-100 transition">
                            Choose Package
                        </button>
                    </div>

                    <!-- GOLD (FEATURED) -->
                    <div class="relative bg-gradient-to-b from-[#fff1c1] to-[#f8cfd6] rounded-[28px] shadow-xl p-10 text-center scale-105 border-2 border-[#d4af37]">
                        <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-[#d4af37] text-white px-5 py-1 rounded-full text-sm tracking-wide">
                            Best Choice
                        </span>

                        <h3 class="text-3xl font-bold text-[#b43b5c] mb-4">
                            Gold Package
                        </h3>

                        <p class="text-[#b43b5c] text-4xl font-extrabold mb-6">
                            Rp 25.000.000
                        </p>

                        <ul class="text-gray-700 space-y-3 mb-10">
                            <li>✔ Wedding Organizer</li>
                            <li>✔ Premium Decoration</li>
                            <li>✔ Documentation (Photo)</li>
                            <li>✔ Sound System & MC</li>
                            <li>✔ Wedding Crew</li>
                        </ul>

                        <button class="w-full py-4 rounded-full bg-[#b43b5c] text-white hover:bg-[#9f334f] transition font-semibold">
                            Choose Package
                        </button>
                    </div>

                    <!-- PLATINUM -->
                    <div class="relative bg-gradient-to-b from-[#f5f5f5] to-[#e5e5e5] rounded-[24px] shadow-md p-8 text-center border border-gray-300">
                        <h3 class="text-2xl font-semibold text-gray-700 mb-4">
                            Platinum Package
                        </h3>

                        <p class="text-[#b43b5c] text-3xl font-bold mb-6">
                            Rp 40.000.000
                        </p>

                        <ul class="text-gray-700 space-y-3 mb-8">
                            <li>✔ Full Wedding Organizer</li>
                            <li>✔ Luxury Decoration</li>
                            <li>✔ Photo & Video Cinematic</li>
                            <li>✔ Entertainment & MC</li>
                            <li>✔ Full Wedding Crew</li>
                            <li>✔ Honeymoon Setup</li>
                        </ul>

                        <button class="w-full py-3 rounded-full bg-gray-700 text-white hover:bg-gray-800 transition">
                            Choose Package
                        </button>
                    </div>

                </div>

            </div>
        </section>

        <?= $this->include('layout/footer') ?>

    </div>

</body>

</html>