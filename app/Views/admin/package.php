<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Paket</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300..800&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 font-[Montserrat]">

    <div class="flex min-h-screen ">

        <!-- Sidebar -->
        <?= $this->include('admin/layout/navbar') ?>
        <!-- Content -->
        <main class="flex-1 p-8 relative">

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="absolute left-0 right-0 top-0 mb-6 p-4 rounded-lg bg-red-100 text-red-700 border border-red-300">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')) : ?>
                <div class="absolute left-0 right-0 top-0 mb-6 p-4 rounded-lg bg-green-100 text-green-700 border border-green-300">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>


            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-700">Kelola Paket</h1>
                <a href="<?= base_url('admin/packages/tambah') ?>">
                    <button class="px-5 py-3 rounded-lg bg-[#b43b5c] text-white hover:bg-[#9f334f] transition">
                        + Tambah Paket
                    </button>
                </a>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="border-b text-gray-500">
                            <th class="py-3 text-left">Nama Paket</th>
                            <th class="py-3 text-left">Harga</th>
                            <th class="py-3 text-left">Deskripsi</th>
                            <th class="py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (!empty($packages)) : ?>
                            <?php foreach ($packages as $package) : ?>

                                <tr class="border-b">
                                    <td class="py-3 font-semibold">
                                        <?= esc($package['name']) ?>
                                    </td>

                                    <td class="py-3">
                                        <?= 'Rp ' . number_format($package['price'], 0, ',', '.') ?>
                                    </td>

                                    <td class="py-3">

                                        <?= esc($package['description']) . '...' ?>

                                    </td>

                                    <td class="py-3 text-center space-x-2">
                                        <a href="<?= base_url(relativePath: 'admin/package/edit/' . $package['id']) ?>"
                                            class="px-3 py-1 rounded bg-blue-500 text-white text-sm">
                                            Edit
                                        </a>

                                        <form action="<?= base_url('admin/package/delete/' . $package['id']) ?>" method="post" class="inline">
                                            <?= csrf_field() ?>
                                            <button type="submit"
                                                onclick="return confirm('Yakin hapus paket ini?')"
                                                class="px-3 py-1 rounded bg-red-500 text-white text-sm">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="4" class="py-6 text-center text-gray-500">
                                    Data paket belum tersedia
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