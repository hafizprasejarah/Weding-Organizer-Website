<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Paket</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body class="bg-gray-100 font-[Montserrat]">

    <div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

        <h1 class="text-2xl font-bold text-gray-700 mb-6">
            Tambah Paket
        </h1>

        <form action="<?= base_url('admin/package/update/' . $package['id']) ?>" method="post">

            <?= csrf_field() ?>

            <div class="mb-4">
                <label class="block text-gray-600 mb-2">Nama Paket</label>
                <input type="text" name="name" required value="<?= $package['name'] ?>"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring">
            </div>


            <div class="mb-4">
                <label class="block text-gray-600 mb-2">Harga</label>
                <input type="number" name="price" required value="<?= $package['price'] ?>"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring">
            </div>


            <div class="mb-4">
                <label class="block text-gray-600 mb-2">
                    Deskripsi Paket
                </label>

                <?php foreach ($package['description'] as $description) : ?>

                    <div id="description-wrapper" class="space-y-2">
                        <input type="text" name="description[]" value="<?= $description ?>"
                            class="w-full border rounded-lg px-4 py-2"
                            placeholder="Contoh: Foto prewedding">
                    </div>
                <?php endforeach ?>

                <button type="button"
                    onclick="addDescription()"
                    class="mt-3 px-4 py-2 bg-blue-500 text-white rounded-lg text-sm">
                    + Tambah Deskripsi
                </button>
            </div>


            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-3 bg-[#b43b5c] text-white rounded-lg hover:bg-[#9f334f]">
                    Simpan Paket
                </button>
            </div>

        </form>
    </div>

    <script>
        function addDescription() {
            const wrapper = document.getElementById('description-wrapper');

            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'description[]';
            input.placeholder = 'Contoh: Video cinematic';
            input.className = 'w-full border rounded-lg px-4 py-2';

            wrapper.appendChild(input);
        }
    </script>

</body>

</html>