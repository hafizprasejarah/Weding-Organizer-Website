<nav class="max-w-[2560px] z-10 flex w-full py-4 px-10 lg:px-15 xl:px-20 justify-between  bg-linear-to-l from-[#ff6186] to-[#C63D5C] text-[#FFF5F7] ">

    <a href="<?= base_url('/') ?>">
        <h1 class="relative logo-font font-semibold text-[20px] sm:text-[30px] lg:text-[35px] xl:text-[40px]">Lovely Moments</h1>
    </a>

    <div class="text-[25px] text-[#FFF5F7] cursor-pointer md:hidden" id="menu-btn">
        <i class="fa-solid fa-bars"></i>
    </div>
    
    <ul id="BarMenu" class="absolute w-full flex flex-row top-[100%] left-[0] p-4 right-0 justify-center bg-[#C63D5C] md:bg-transparent md:p-0 md:justify-start md:relative md:w-fit md:flex lg xl:text-[20px] gap-2 sm:gap-5 xl:gap-8 items-center text-[10px]">
        <li><a class="text-[#FFF5F7] nav-link <?= ($title === 'home') ? 'aktif' : '' ?>" href="<?= base_url('/') ?>">Home</a></li>
        <li><a class="text-[#FFF5F7] nav-link <?= ($title === 'services') ? 'aktif' : '' ?>" href="<?= base_url('/services') ?>">Services</a></li>
        <li><a class="text-[#FFF5F7] nav-link <?= ($title === 'gallery') ? 'aktif' : '' ?>" href="<?= base_url('/gallery') ?>">Gallery</a></li>
        <li><a class="text-[#FFF5F7] nav-link <?= ($title === 'package') ? 'aktif' : '' ?>" href="<?= base_url('/packages') ?>">Packages</a></li>
        <li><a class="text-[#FFF5F7] nav-link <?= ($title === 'contact') ? 'aktif' : '' ?>" href="<?= base_url('/contact') ?>">Contact</a></li>
        <li><a class="text-[#FFF5F7]" href="<?= base_url('/book/transaction') ?>"><Button class="px-4 py-2 md:px-6 md:py-3 w-fit rounded-[7px] bg-[radial-gradient(circle_at_top,#C63D5C,#a3284d)] hover:brightness-110 transition">Book Now </Button></a></li>
    </ul>
</nav>