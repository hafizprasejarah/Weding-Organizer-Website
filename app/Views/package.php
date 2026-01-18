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

        <section class="pt-32 pb-24 bg-gradient-to-b from-[#fdecef] to-[#f8cfd6]">
            <div class="max-w-6xl mx-auto px-6">

 
                <h2 class="text-center logo-font text-[#b43b5c] text-[40px] md:text-[48px] mb-16">
                    Wedding Packages
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                    <?php foreach ($packages as $package): ?>


                        <div class="relative bg-white rounded-[24px] shadow-md p-8 text-center flex flex-col justify-between">


                            <h3 class="text-2xl font-semibold text-gray-600mb-4 h-[10%]">
                                <?= esc($package['name']) ?>
                            </h3>

       
                            <p class="text-3xl font-bold text-[#b43b5c] mb-6 h-[10%]">
                                Rp <?= number_format($package['price'], 0, ',', '.') ?>
                            </p>


                            <ul class="text-gray-700 space-y-3 mb-8 text-center inline-block h-[70%]">
                                <?php if (is_array($package['description'])): ?>

                                    <?php foreach ($package['description'] as $desc): ?>
                                        <li> <?= esc($desc) ?></li>
                                    <?php endforeach ?>

                                <?php endif; ?>
                            </ul>


                            <a href="<?= base_url('book/transaction') ?>"
                                class="h-[10%] block w-full py-3 rounded-full border border-gray-400 text-gray-600 hover:bg-gray-100 transition font-semibold">
                                Choose Package
                            </a>

                        </div>

                    <?php endforeach; ?>

                </div>


            </div>
        </section>

        <?= $this->include('layout/footer') ?>

    </div>

</body>

</html>