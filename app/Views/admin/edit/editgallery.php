<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Gallery</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body class="bg-gray-100 font-[Montserrat]">

<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

    <h1 class="text-2xl font-bold text-gray-700 mb-6">
        Edit Gallery
    </h1>

    <form action="<?= base_url('admin/gallery/update/' . $gallery['id']) ?>"
          method="post" enctype="multipart/form-data">

        <?= csrf_field() ?>

        <div class="mb-4">
            <label class="block text-gray-600 mb-2">Kategori</label>
            <input type="text" name="kategori" required
                   value="<?= esc($gallery['category']) ?>"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-600 mb-2">Deskripsi</label>
            <textarea name="deskripsi" rows="4"
                class="w-full border rounded-lg px-4 py-2"
                required><?= esc($gallery['description']) ?></textarea>
        </div>

        <!-- Preview gambar lama -->
        <div class="mb-4">
            <label class="block text-gray-600 mb-2">Gambar Saat Ini</label>
            <img src="<?= base_url('uploads/gallery/' . $gallery['image']) ?>"
                 class="w-40 h-40 object-cover rounded-lg border">
        </div>

        <div class="mb-6">
            <label class="block text-gray-600 mb-2">Ganti Gambar (opsional)</label>
            <input type="file" name="gambar"
                   accept="image/jpeg,image/png,image/webp"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-6 py-3 bg-[#b43b5c] text-white rounded-lg hover:bg-[#9f334f]">
                Update Gallery
            </button>
        </div>

    </form>
</div>

</body>
</html>
