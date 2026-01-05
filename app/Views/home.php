<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="bg-[#C63D5C] w-full flex justify-center relative">
    <div class="w-full max-w-[2100px] grid grid-cols-1 justify-center">

        <!-- navbar section -->
        <section class="fixed top-0 left-0 w-full z-99"> <?= $this->include('layout/navbar') ?></section>

        <!-- hero section -->
        <section
            class="hero-section h-screen w-full relative pt-[12rem] bg-cover"
            style="background-image: url('<?= base_url('assets/wedding.jpg') ?>');">

            <div class="hero-gradient"></div>

            <div class="relative z-10 text-[#FFF5F7] flex w-full font-medium">
                <div class="w-1/2 gap-6 flex flex-col justify-center pl-20">
                    <h1 class="logo-font text-[80px] leading-none">
                        Creating Your Perfect Day
                    </h1>
                    <p class="text-[20px] tracking-wide">
                        EXPERIENCE YOUR DREAM WEDDING WITH US
                    </p>
                    <button
                        class=" px-6 py-3 w-fit text-[16px] rounded-[7px] font-bold text-[#bb2a55] bg-[linear-gradient(160deg,#FADADD,#F4B6C2)] hover:brightness-105 transition">
                        Our Services
                    </button>

                </div>

                <div class="w-1/2"></div>
            </div>
        </section>

        <!-- card section -->
        <section class=" bg-[#f3dfe1]  flex flex-row justify-center items-center gap-10 p-[20px] py-20">
            <!-- cards -->
            <div class="w-[350px] min-h-[160px] bg-[#f9f0f1] rounded-[15px] shadow-lg flex items-center gap-6 p-6">
                <div>Icons</div>
                <div class="gap-6 flex flex-col">
                    <h1 class="text-[25px] font-semibold ">Wedding Planing</h1>
                    <p class="text-[15px] font-medium">Full planing & coordination</p>
                </div>
            </div>

            <!-- cards -->
            <div class="w-[350px] min-h-[160px] bg-[#f9f0f1] rounded-[15px] shadow-lg flex items-center gap-6 p-6">
                <div>Icons</div>
                <div class="gap-6 flex flex-col">
                    <h1 class="text-[25px] font-semibold ">Beautiful Decor</h1>
                    <p class="text-[15px] font-medium">Elegant romantic & setup</p>
                </div>
            </div>

            <!-- cards -->
            <div class="w-[350px] min-h-[160px] bg-[#f9f0f1] rounded-[15px] shadow-lg flex items-center gap-6 p-6">
                <div>Icons</div>
                <div class="gap-6 flex flex-col">
                    <h1 class="text-[25px] font-semibold ">Photo & Video</h1>
                    <p class="text-[15px] font-medium">Capture your special moments</p>
                </div>
            </div>


        </section>


        <?= $this->include('layout/footer') ?>
    </div>

</body>

</html>