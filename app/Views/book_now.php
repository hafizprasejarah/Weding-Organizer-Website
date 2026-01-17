<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<body class="bg-[#f9cfd3] w-full flex justify-center">

    <div class="w-full max-w-525 relative">

        <section class="fixed top-0  w-full z-99"> <?= $this->include('layout/navbar') ?></section>



        <section class="pt-32 pb-24 bg-gradient-to-b from-[#fdecef] to-[#f8cfd6]">
            <div class="max-w-4xl mx-auto px-6">


                <h2 class="text-center logo-font text-[#b43b5c] text-[42px] md:text-[52px] mb-4">
                    Book Your Special Day
                </h2>

                <p class="text-center text-gray-600 mb-12">
                    Wujudkan pernikahan impian Anda bersama kami
                </p>

                <div id="alertBox"
                    class="fixed top-[-100px] left-1/2 -translate-x-1/2 px-6 py-4 rounded-xl shadow-lg text-white font-medium transition-all duration-500 z-[9999] hidden">
                </div>

                <div class="bg-white rounded-[28px] shadow-lg p-10">
                    <form id="bookingForm" action="<?= base_url('book/tambah') ?>" method="post" class="grid grid-cols-1 md:grid-cols-2 gap-6">

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
                                No. WhatsApp
                            </label>
                            <input type="text" name="phone" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300">
                        </div>


                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">
                                Tanggal Pernikahan
                            </label>
                            <input type="date" name="date" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300">
                        </div>


                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-600 mb-1">
                                Pilih Paket
                            </label>
                            <select name="package_id" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300">
                                <option value="">-- Pilih Paket --</option>
                                <?php foreach ($packages as $package): ?>
                                    <option value="<?= esc($package['id']) ?>">
                                        <?= esc($package['name']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-600 mb-1">
                                Catatan Tambahan
                            </label>
                            <textarea name="note" rows="4"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300"></textarea>
                        </div>

                        <div class="md:col-span-2 mt-4">
                            <button type="submit"
                                class="w-full py-4 rounded-full bg-[#b43b5c] text-white font-semibold">
                                Book Now
                            </button>
                        </div>
                    </form>


                    <p class="text-center text-sm text-gray-500 mt-6">
                        Atau langsung hubungi kami via
                        <a href="https://wa.me/6281234567890" class="text-[#b43b5c] font-semibold hover:underline">
                            WhatsApp
                        </a>
                    </p>

                </div>

            </div>
        </section>

        <?= $this->include('layout/footer') ?>

    </div>

</body>
<script>
    const form = document.getElementById('bookingForm');
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


        alertBox.classList.remove('bg-green-400', 'bg-red-400');
        alertBox.classList.add(status === 'success' ? 'bg-green-400' : 'bg-red-400');


        setTimeout(() => {
            alertBox.style.top = '24px';
        }, 10);

        setTimeout(() => {
            alertBox.style.top = '-100px';
        }, 3000);

        setTimeout(() => {
            alertBox.classList.add('hidden');
        }, 3500);
    }
</script>

</html>