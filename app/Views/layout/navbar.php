<nav class="max-w-[2560px] z-10 flex w-full py-4 px-10 lg:px-15 xl:px-20 justify-between  bg-linear-to-l from-[#ff6186] to-[#C63D5C] text-[#FFF5F7] ">
    <a href="<?= base_url('/') ?>">
        <h1 class="logo-font font-semibold text-[15px] sm:text-[30px] lg:text-[35px] xl:text-[40px]">Lovely Moments</h1>
    </a>
    <ul class="hidden md:flex lg xl:text-[20px] gap-5 xl:gap-8 items-center text-[10px]">
        <li><a class="text-[#FFF5F7] nav-link <?= ($title === 'home') ? 'aktif' : '' ?>" href="<?= base_url('/') ?>">Home</a></li>
        <li><a class="text-[#FFF5F7] nav-link <?= ($title === 'services') ? 'aktif' : '' ?>" href="<?= base_url('/services') ?>">Services</a></li>
        <li><a class="text-[#FFF5F7] nav-link <?= ($title === '') ? 'aktif' : '' ?>" href="<?= base_url('/gallery') ?>">Gallery</a></li>
        <li><a class="text-[#FFF5F7] nav-link <?= ($title === '') ? 'aktif' : '' ?>" href="<?= base_url('/packages') ?>">Packages</a></li>
        <li><a class="text-[#FFF5F7] nav-link <?= ($title === '') ? 'aktif' : '' ?>" href="<?= base_url('/about') ?>">Contact</a></li>
        <li><a class="text-[#FFF5F7]" href="<?= base_url('/contact') ?>"><Button class=" px-6 py-3 w-fit rounded-[7px] bg-[radial-gradient(circle_at_top,#C63D5C,#a3284d)] hover:brightness-110 transition">Book Now </Button></a></li>
    </ul>
</nav>