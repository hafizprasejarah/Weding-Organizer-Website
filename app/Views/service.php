<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="bg-[#f9cfd3] w-full flex justify-center relative ">
    <div class="w-full max-w-525 grid grid-cols-1 justify-center">
        <!-- navbar section -->
        <section class="fixed top-0 left-0 w-full z-99"> <?= $this->include('layout/navbar') ?></section>

        <section class="py-25 bg-gradient-to-b from-[#fdecef] to-[#f8cfd6]">
            <div class="max-w-6xl mx-auto px-6">


                <h2 class="text-center logo-font text-[#b43b5c] text-[40px]  md:text-[48px] xl:text-[52px] mb-12">
                    Our Services
                </h2>

                <!-- Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <!-- Card 1 -->
                    <div class="relative rounded-[20px] overflow-hidden shadow-lg group">
                        <img src="<?= base_url('assets/planning.jpg') ?>"
                            class="w-full h-[420px] object-cover group-hover:scale-105 transition duration-500">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#b43b5c]/80 via-[#b43b5c]/30 to-transparent"></div>

                        <div class="absolute bottom-0 p-6 text-white">
                            <h3 class="text-[22px] font-serif mb-2">
                                Wedding Planning
                            </h3>
                            <p class="text-sm opacity-90">
                                Full planning & coordination for your special day.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="relative rounded-[20px] overflow-hidden shadow-lg group">
                        <img src="<?= base_url('assets/decoration.jpg') ?>"
                            class="w-full h-[420px] object-cover group-hover:scale-105 transition duration-500">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#b43b5c]/80 via-[#b43b5c]/30 to-transparent"></div>

                        <div class="absolute bottom-0 p-6 text-white">
                            <h3 class="text-[22px] font-serif mb-2">
                                Beautiful Decor
                            </h3>
                            <p class="text-sm opacity-90">
                                Elegant and romantic setup for ceremony & reception.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="relative rounded-[20px] overflow-hidden shadow-lg group">
                        <img src="<?= base_url('assets/fotografi.webp') ?>"
                            class="w-full h-[420px] object-cover group-hover:scale-105 transition duration-500">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#b43b5c]/80 via-[#b43b5c]/30 to-transparent"></div>

                        <div class="absolute bottom-0 p-6 text-white">
                            <h3 class="text-[22px] font-serif mb-2">
                                Photo & Video
                            </h3>
                            <p class="text-sm opacity-90">
                                Capturing your love story with stunning visuals.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>




        <?= $this->include('layout/footer') ?>
    </div>

</body>

</html>