<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<body class="bg-[#f9cfd3] w-full flex justify-center">

    <div class="w-full max-w-525">

        <!-- Navbar -->
        <section class="fixed top-0  w-full z-99"> <?= $this->include('layout/navbar') ?></section>

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
                                <strong> Alamat:</strong><br>
                                Jl. Grinsing no 21 Gambiran Cemani Sukoharjo Jawa Tengah
                            </li>
                            <li>
                                <strong> Telepon / WhatsApp:</strong><br>
                                <a href="https://wa.me/088221038389" class="text-[#b43b5c] hover:underline">
                                    +62 812-3456-7890
                                </a>
                            </li>
                            <li>
                                <strong> Email:</strong><br>
                                <a href="mailto:afizpratama0809@gmail.com" class="text-[#b43b5c] hover:underline">
                                    hafizpratama0809@gmail.com
                                </a>
                            </li>
                            <li>
                                <strong> Jam Operasional:</strong><br>
                                Senin - Sabtu (09.00 - 18.00)
                            </li>
                        </ul>
                    </div>

                    <div id="alertBox"
                        class="fixed top-[-100px] left-1/2 -translate-x-1/2 px-6 py-4 rounded-xl shadow-lg text-white font-medium transition-all duration-500 z-[9999] hidden">
                    </div>

                    <!-- Contact Form -->
                    <div class="bg-white rounded-[24px] shadow-md p-8">
                        <h3 class="text-2xl font-semibold text-[#b43b5c] mb-6">
                            Kirim Pesan
                        </h3>

                        <form id="contactForm" action="<?= base_url('contact/tambah') ?>" method="post" class="space-y-5">
                            <?= csrf_field() ?>

                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">
                                    Nama Lengkap
                                </label>
                                <input type="text" name="name" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">
                                    Email
                                </label>
                                <input type="email" name="email" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">
                                    Pesan
                                </label>
                                <textarea name="message" rows="4" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full py-3 rounded-full bg-[#b43b5c] text-white">
                                Kirim Pesan
                            </button>
                        </form>

                    </div>

                </div>

            </div>
        </section>

        <?= $this->include('layout/footer') ?>

    </div>

    <script>
        const form = document.getElementById('contactForm');
        const alertBox = document.getElementById('alertBox');

        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            const formData = new FormData(form);

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const result = await response.json();

                showAlert(result.message, result.status);

                if (result.status === 'success') {
                    form.reset();
                }

            } catch (error) {
                showAlert('Terjadi kesalahan, coba lagi.', 'error');
            }
        });

        function showAlert(message, status) {
            alertBox.textContent = message;
            alertBox.classList.remove('hidden');

            // warna
            alertBox.classList.remove('bg-green-400', 'bg-red-400');
            alertBox.classList.add(status === 'success' ? 'bg-green-400' : 'bg-red-400');

            // animasi masuk (dari atas)
            setTimeout(() => {
                alertBox.style.top = '24px';
            }, 10);

            // animasi keluar
            setTimeout(() => {
                alertBox.style.top = '-100px';
            }, 3000);

            // sembunyikan kembali
            setTimeout(() => {
                alertBox.classList.add('hidden');
            }, 3500);
        }
    </script>


</body>

</html>