<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detail Pesan</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body class="bg-gray-100 font-[Montserrat]">

    <div class="flex min-h-screen">

        <?= $this->include('admin/layout/navbar') ?>

        <main class="flex-1 p-8">

            <h1 class="text-3xl font-bold text-gray-700 mb-6">
                Detail Pesan Kontak
            </h1>

            <div class="bg-white rounded-xl shadow p-6 space-y-6">

                <!-- STATUS -->
                <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg">
                    <div>
                        <p class="text-sm text-gray-500">Status</p>
                        <span class="px-3 py-1 text-sm rounded-full
                            <?= 'bg-green-100 text-green-600' ?>">
                            <?= strtoupper($contact['status']) ?>
                        </span>
                    </div>

                   
                    <form method="post"
                        action="<?= base_url('admin/contact/status/' . $contact['id']) ?>">
                        <?= csrf_field() ?>

                        <select name="status"
                            onchange="this.form.submit()"
                            class="border rounded px-3 py-1 text-sm">
                            <option value="read" <?= $contact['status'] === 'read' ? 'selected' : '' ?>>
                                Read
                            </option>
                            <option value="unread" <?= $contact['status'] === 'unread' ? 'selected' : '' ?>>
                                Unread
                            </option>
                        </select>
                    </form>
                </div>

                <!-- NAMA -->
                <div>
                    <p class="text-gray-500 text-sm">Nama</p>
                    <p class="font-semibold"><?= esc($contact['name']) ?></p>
                </div>

                <!-- EMAIL -->
                <div>
                    <p class="text-gray-500 text-sm">Email</p>
                    <p><?= esc($contact['email']) ?></p>
                </div>

         
                <div>
                    <p class="text-gray-500 text-sm">Tanggal</p>
                    <p><?= date('d M Y H:i', strtotime($contact['created_at'])) ?></p>
                </div>

                <div>
                    <p class="text-gray-500 text-sm">Pesan</p>
                    <p class="whitespace-pre-line text-gray-700">
                        <?= esc($contact['message']) ?>
                    </p>
                </div>

                <!-- BUTTON -->
                <a href="<?= base_url('admin/contact') ?>"
                    class="inline-block mt-4 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                    Kembali
                </a>

            </div>

        </main>
    </div>

</body>
</html>
