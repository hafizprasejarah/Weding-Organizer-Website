<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <p class="font-heading text-[20px] tracking-wide">
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
        <section class=" bg-[#f9cfd3]  flex flex-row justify-center items-center gap-2 p-[20px] py-15">
            <!-- cards -->
            <div class="w-[370px] h-[130px] bg-[#f6e7e9] rounded-[10px] shadow-lg flex items-center px-4 py-5 gap-2 border-3 border-transparent hover:border-[#ff9cb0] transition-all duration-300">
                <div class="fa-regular fa-calendar-days text-[#C63D5C] text-[58px]"></div>
                <div class="gap-6 flex flex-col">
                    <h1 class="text-[22px] font-semibold text-[#C63D5C]">Wedding Planing</h1>
                    <p class="text-[15px] font-semibold">Full planing & coordination</p>
                </div>
            </div>

            <!-- cards -->
            <div class="w-[370px] h-[130px] bg-[#f6e7e9] rounded-[10px] shadow-lg flex items-center px-4 py-5 gap-2 border-3 border-transparent hover:border-[#ff9cb0] transition-all duration-300">
                <div class="fa-solid fa-fan  text-[#C63D5C] text-[58px]"></div>
                <div class="gap-6 flex flex-col">
                    <h1 class="text-[22px] font-semibold text-[#C63D5C]">Beautiful Decor</h1>
                    <p class="text-[15px] font-semibold">Elegant romantic & setup</p>
                </div>
            </div>
            <!-- cards -->
            <div class="w-[370px] h-[130px] bg-[#f6e7e9] rounded-[10px] shadow-lg flex items-center px-4 py-5 gap-2 border-3 border-transparent hover:border-[#ff9cb0] transition-all duration-300">
                <div class="fa-solid fa-camera-retro text-[#C63D5C] text-[58px]"></div>
                <div class="gap-5 flex flex-col">
                    <h1 class="text-[22px] font-semibold text-[#C63D5C]">Photo & Video</h1>
                    <p class="text-[15px] font-semibold">Capture your special moments</p>
                </div>
            </div>
        </section>

        <section class="h-full w-full py-15 relative overflow-hidden">
            <div class="absolute bg-[radial-gradient(circle_at_top,#ff4f78,#C63D5C)] top-0 left-0 h-[70%] w-full">
            </div>
            <div class="absolute bg-[#f9cfd3] bottom-0 left-0 h-[30%] w-full">
            </div>

            <div class="flex text-[#FFF5F7] flex-row items-center px-12 w-full z-10 relative">
                <div class="border rounded-[5px] border-[#FFF5F7] w-[30%]"></div>
                <h1 class="logo-font text-center text-[60px] font-medium w-[40%] [text-shadow:0_3px_8px_rgba(0,0,0,0.5)]">Our Love Stories</h1>
                <div class="border rounded-[5px] border-[#FFF5F7] w-[30%]"></div>
            </div>
            <div class="text-center z-10">
                <p class="text-[#FFF5F7]  text-[25px] font-medium font-heading heading-underline [text-shadow:0_3px_8px_rgba(0,0,0,0.5)]">
                    Unforgettable Weddings
                </p>
            </div>

            <!-- card Photo -->
            <div class="flex flex-row gap-5 relative z-10 w-full justify-center items-center py-10  px-12">

                <div class="p-1 overflow-hidden bg-[#FFF5F7] h-75 w-1/2 relative">
                    <img class="object-cover h-full w-full" src="<?= base_url('assets/jawa.jpg') ?>" alt="">
                </div>

                <div class="p-1 overflow-hidden bg-[#FFF5F7] h-75 w-1/2">
                    <img class="object-cover h-full w-full relative" src="<?= base_url('assets/sunda.jpg') ?>" alt="">
                </div>
            </div>

            <form action="" class="relative z-10 flex w-full justify-center">
                <button class="px-6 py-3 w-fit text-[16px] rounded-[7px] font-bold text-[#FFF5F7]  bg-[radial-gradient(circle_at_top,#C63D5C,#a3284d)] hover:brightness-110 transition">
                    View Gallery</button>
            </form>
        </section>

        <section class="relative w-full h-[80vh] overflow-hidden">

            <!-- Background Image -->
            <img
                src="<?= base_url('assets/bunga.jpg') ?>"
                alt=""
                class="absolute inset-0 w-full h-full object-cover">

            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-r 
        from-[#c63d5c]/80 
        via-[#ff7a9c]/50 
        to-transparent">
            </div>

            <!-- Content -->
            <div class="relative z-10 h-full flex flex-col justify-center p-12 text-[#FFF5F7] max-w-[720px]">
                <h1 class="logo-font text-[52px] leading-tight font-medium">
                    Ready to Plan Your Dream Wedding?
                </h1>

                <p class="mt-4 font-heading text-[20px] tracking-wide">
                    Let's Make Your Day Unforgettable!
                </p>

                <button
                    class="mt-8 px-6 py-3 w-fit text-[16px] rounded-[7px] font-bold 
                   text-[#bb2a55] 
                   bg-[linear-gradient(160deg,#FADADD,#F4B6C2)] 
                   hover:brightness-105 transition">
                    Book Your Consultation
                </button>
            </div>

        </section>

        <section class="h-[5vh] bg-[#f9cfd3]">

        </section>



        <?= $this->include('layout/footer') ?>
    </div>

</body>

</html>