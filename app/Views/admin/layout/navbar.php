<aside class="w-64 bg-[#b43b5c] text-white flex flex-col">
    <div class="p-6 text-2xl font-bold border-b border-white/20">
        Admin
    </div>

    <nav class="flex-1 p-4 space-y-3">
        <a href="<?= base_url('/admin/dashboard') ?>" class=" <?= ($title == 'dashboard' ) ? 'bg-white/20' : '' ?>  block px-4 py-2 rounded-lg  hover:bg-white/20">
            Dashboard 
        </a>
        <a href="<?= base_url(relativePath: '/admin/package') ?>" class=" <?= ($title == 'packages') ?  'bg-white/20' : '' ?>  block px-4 py-2 rounded-lg hover:bg-white/20">
            Kelola Package
        </a>
        <a href="<?= base_url('/admin/gallery') ?>" class="  <?= ($title == 'gallery') ?  'bg-white/20' : '' ?>  block px-4 py-2 rounded-lg hover:bg-white/20">
            Kelola Gallery
        </a>
        <a href="<?= base_url('/admin/booking') ?>" class=" <?= ($title == 'bookings') ?  'bg-white/20' : '' ?>  block px-4 py-2 rounded-lg hover:bg-white/20">
            Booking
        </a>
        <a href="<?= base_url('/admin/contact') ?>" class="<?= ($title == 'contacts') ?  'bg-white/20' : '' ?>  block px-4 py-2 rounded-lg hover:bg-white/20">
            Pesan Kontak
        </a>
    </nav>

    <?php if ($title === 'dashboard') : ?>
        <div class="p-4 border-t border-white/20">
            <a href="<?= base_url('admin/logout') ?>" class="block text-center bg-white text-[#b43b5c] py-2 rounded-lg font-semibold">
                Logout
            </a>
        </div>
    <?php endif ?>




</aside>