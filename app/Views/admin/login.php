<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css?v=' . time()) ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300..800&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-b from-[#fdecef] to-[#f8cfd6] font-[Montserrat]">

    <div class="bg-white w-full max-w-md rounded-[28px] shadow-xl p-10">

        <h2 class="text-center text-3xl font-bold text-[#b43b5c] mb-2">
            Admin Login
        </h2>

        <form action="<?= base_url('admin/login/user') ?>" method="post" class="space-y-6">
            <!-- MESSAGE -->
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="mb-6 p-4 rounded-lg bg-red-100 text-red-700 border border-red-300">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')) : ?>
                <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-700 border border-green-300">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <?= csrf_field() ?>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    email
                </label>
                <input type="email" name="email" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Password
                </label>
                <input type="password" name="password" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#b43b5c]/40 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full py-3 rounded-full bg-[#b43b5c] text-white font-semibold hover:bg-[#9f334f] transition">
                Login
            </button>
        </form>

    </div>

</body>

</html>