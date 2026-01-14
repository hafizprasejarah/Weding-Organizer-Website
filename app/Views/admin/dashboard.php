<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300..800&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 font-[Montserrat]">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <?= $this->include('admin/layout/navbar') ?>

   
        <main class="flex-1 p-8">
            <h1 class="text-3xl font-bold text-gray-700 mb-8">
                Dashboard
            </h1>


            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-sm text-gray-500">Total Booking</p>
                    <h3 class="text-3xl font-bold text-[#b43b5c]"><?= $total_booking ?></h3>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-sm text-gray-500">Pesan Masuk</p>
                    <h3 class="text-3xl font-bold text-[#b43b5c]"><?= $total_message ?></h3>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-sm text-gray-500">Gallery</p>
                    <h3 class="text-3xl font-bold text-[#b43b5c]"><?= $total_gallery ?></h3>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-sm text-gray-500">Paket</p>
                    <h3 class="text-3xl font-bold text-[#b43b5c]"><?= $total_package ?></h3>
                </div>
            </div>

            <!-- Table Example -->
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">
                    Booking Terbaru
                </h2>


                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b">
                            <th class="py-3 text-gray-500">Nama</th>
                            <th class="py-3 text-gray-500">Tanggal</th>
                            <th class="py-3 text-gray-500">Paket</th>
                            <th class="py-3 text-gray-500">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($bookings)) : ?>
                            <?php foreach ($bookings as $booking) : ?>
                                <tr class="border-b">
                                    <td class="py-3"><?= esc($booking['name']) ?></td>
                                    <td class="py-3">
                                        <?= esc(date('d-m-Y', strtotime($booking['date']))) ?>
                                    </td>
                                    <td class="py-3">
                                        <?= esc($booking['package_id']) ?>
                                    </td>
                                    <td class="py-3 font-semibold
                                    <?= $booking['status'] === 'confirmed'
                                    ? 'text-green-600'
                                    : 'text-yellow-600' ?>">
                                        <?= esc(ucfirst($booking['status'])) ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="4" class="py-4 text-center text-gray-400">
                                    Belum ada booking
                                </td>
                            </tr>
                        <?php endif ?>
                    </tbody>

                </table>

            </div>

        </main>

    </div>

</body>

</html>