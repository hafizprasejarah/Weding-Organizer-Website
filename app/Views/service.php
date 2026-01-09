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

        <section class="pt-[12rem] flex flex-col justify-center items-center bg-cover">

            <h1 class=" logo-font text-center text-[40px] xl:text-[60px] lg:text-[50px] md:text-[40px] font-medium w-[100%] sm:w-[40%] [text-shadow:0_3px_8px_rgba(0,0,0,0.5) text-[#C63D5C]">Our Services</h1>

        </section>

        <section class=" bg-[#f9cfd3]  flex flex-col md:flex-row justify-center items-center gap-4 sm:gap-2 p-[20px] py-15">
            <!-- cards -->
            <div class="w-full sm:w-[370px] sm:h-[330px] bg-[#f6e7e9] rounded-[10px] shadow-lg flex flex-col sm:flex-row items-center px-4 py-5 gap-10 sm:gap-2 border-3 border-transparent hover:border-[#ff9cb0] transition-all duration-300">
                <div class="fa-regular fa-calendar-days text-[#C63D5C] text-[68px] sm:text-[48px] "></div>
                <div class=" sm:gap-6 flex flex-col items-center sm:items-start">
                    <h1 class="text-[20px] lg:text-[22px] font-semibold text-[#C63D5C]">Wedding Planing</h1>
                    <p class="text-[12px] lg:text-[15px] font-semibold">Full planing & coordination</p>
                </div>
            </div>

            <!-- cards -->
            <div class="w-full sm:w-[370px] sm:h-[330px] bg-[#f6e7e9] rounded-[10px] shadow-lg flex flex-col sm:flex-row items-center px-4 py-5 gap-10 sm:gap-2 border-3 border-transparent hover:border-[#ff9cb0] transition-all duration-300">
                <div class="fa-regular fa-calendar-days text-[#C63D5C] text-[68px] sm:text-[48px] "></div>
                <div class="sm:gap-6 flex flex-col items-center sm:items-start">
                    <h1 class="text-[20px] lg:text-[22px] font-semibold text-[#C63D5C]">Beautiful Decor</h1>
                    <p class="text-[12px] lg:text-[15px] font-semibold">Elegant romantic & setup</p>
                </div>
            </div>

            <!-- cards -->
            <div class="w-full sm:w-[370px] sm:h-[330px] bg-[#f6e7e9] rounded-[10px] shadow-lg flex flex-col sm:flex-row items-center px-4 py-5 gap-10 sm:gap-2 border-3 border-transparent hover:border-[#ff9cb0] transition-all duration-300">
                <div class="fa-solid fa-camera-retro text-[#C63D5C] text-[68px] sm:text-[48px]"></div>
                <div class="sm:gap-6 flex flex-col items-center sm:items-start">
                    <h1 class="text-[20px] lg:text-[22px] font-semibold text-[#C63D5C]">Photo & Video</h1>
                    <p class="text-[12px] lg:text-[15px] font-semibold">Capture your special moments</p>
                </div>
            </div>
        </section>



        <?= $this->include('layout/footer') ?>
    </div>

</body>

</html>