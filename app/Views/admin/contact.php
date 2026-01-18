<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300..800&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 font-[Montserrat]">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <?= $this->include('admin/layout/navbar') ?>

        <main class="flex-1 p-8 relative">

            <?php if (session()->getFlashdata('error')) : ?>
                <div id="flash-message"
                    class="fixed top-6 left-1/2 -translate-x-1/2 z-50
               flex items-center gap-3
               px-6 py-4 rounded-xl
               bg-red-100 text-red-700 border border-red-300
               shadow-lg transition-all duration-500">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span><?= session()->getFlashdata('error') ?></span>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')) : ?>
                <div id="flash-message"
                    class="fixed top-6 left-1/2 -translate-x-1/2 z-50
               flex items-center gap-3
               px-6 py-4 rounded-xl
               bg-green-100 text-green-700 border border-green-300
               shadow-lg transition-all duration-500">
                    <i class="fa-solid fa-circle-check"></i>
                    <span><?= session()->getFlashdata('success') ?></span>
                </div>
            <?php endif; ?>

            <div class="flex items-center justify-between mb-6 ">
                <h1 class="text-3xl font-bold text-gray-700">
                    Pesan Kontak
                </h1>

                <form method="get" class="inline-block ml-4">
                    <select name="status"
                        onchange="this.form.submit()"
                        class="border rounded px-3 py-1 text-sm">
                        <option value="">Semua</option>
                        <option value="unread" <?= request()->getGet('status') == 'unread' ? 'selected' : '' ?>>
                            Unread
                        </option>
                        <option value="read" <?= request()->getGet('status') == 'read' ? 'selected' : '' ?>>
                            Read
                        </option>
                    </select>
                </form>

            </div>


            <div class="bg-white rounded-xl shadow p-6 overflow-x-auto">
                <table class="w-full border-collapse min-w-[700px]">
                    <thead>
                        <tr class="border-b text-gray-500">
                            <th class="py-3 text-left">Nama</th>
                            <th class="py-3 text-left">Email</th>
                            <th class="py-3 text-left">Pesan</th>
                            <th class="py-3 text-left">Tanggal</th>
                            <th class="py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($contacts)): ?>
                            <?php foreach ($contacts as $contact): ?>
                                <tr class="border-b hover:bg-gray-50 transition">
                                    <td class="py-3">
                                        <?= esc($contact['name']) ?>
                                    </td>

                                    <td class="py-3">
                                        <?= esc($contact['email']) ?>
                                    </td>

                                    <td class="py-3 text-gray-600 max-w-xs truncate">
                                        <?= esc($contact['message']) ?>
                                    </td>

                                    <td class="py-3">
                                        <?= date('d-m-Y', strtotime($contact['created_at'])) ?>
                                    </td>

                                    <td class="py-3 text-center space-x-2">
                                        <a href="<?= base_url('admin/contact/' . $contact['id']) ?>"
                                            class="inline-block px-3 py-1 rounded bg-blue-500 text-white text-sm hover:bg-blue-600">
                                            Detail
                                        </a>

                                        <a href="<?= base_url('admin/contact/delete/' . $contact['id']) ?>"
                                            onclick="return confirm('Yakin ingin menghapus pesan ini?')"
                                            class="inline-block px-3 py-1 rounded bg-red-500 text-white text-sm hover:bg-red-600">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="py-6 text-center text-gray-500">
                                    Belum ada pesan masuk
                                </td>
                            </tr>
                        <?php endif ?>
                    </tbody>

                </table>
            </div>

        </main>

    </div>

</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const flash = document.getElementById('flash-message');
        if (flash) {
            setTimeout(() => {
                flash.classList.add('opacity-0', '-translate-y-4');
                setTimeout(() => flash.remove(), 500);
            }, 2000);
        }
    });
</script>

</html>