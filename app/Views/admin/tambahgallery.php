<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Gallery</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body class="bg-gray-100 font-[Montserrat]">

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

        <h1 class="text-2xl font-bold text-gray-700 mb-6">
            Tambah Gallery
        </h1>

        <form action="<?= base_url('admin/gallery/store') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="mb-4">
                <label class="block text-gray-600 mb-2">Kategori</label>
                <input type="text" name="kategori" required
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring">
            </div>


            <div class="mb-4">
                <label class="block text-gray-600 mb-2">Deskripsi</label>
                <!-- <input type="text" name="deskripsi" required
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring"> -->
                    <teXtarea name="deskripsi" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring" required ></teXtarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 mb-2">
                    Tambah Gambar
                </label>

                <div id="description-wrapper" class="space-y-2">
                    <input type="file" required name="gambar" accept="image/png, image/jpeg, image/gif"
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Contoh: Foto prewedding">
                </div>
                
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-3 bg-[#b43b5c] text-white rounded-lg hover:bg-[#9f334f]">
                    Simpan Paket
                </button>
            </div>

        </form>
    </div>



</body>

</html>