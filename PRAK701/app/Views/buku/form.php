<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= isset($buku) ? 'Edit Buku' : 'Tambah Buku' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">
            <?= isset($buku) ? 'Edit Buku' : 'Tambah Buku' ?>
        </h1>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="bg-red-100 text-red-600 p-4 rounded mb-4 text-sm">
                <?php foreach (session()->getFlashdata('errors') as $err): ?>
                    <div>- <?= esc($err) ?></div>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <form method="post" action="<?= isset($buku) ? '/buku/update/'.$buku['id'] : '/buku/store' ?>">
            <label class="block mb-2 font-semibold">Judul:</label>
            <input type="text" name="judul" value="<?= esc($buku['judul'] ?? old('judul')) ?>" required
                class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-green-500">

            <label class="block mb-2 font-semibold">Pengarang:</label>
            <input type="text" name="pengarang" value="<?= esc($buku['pengarang'] ?? old('pengarang')) ?>" required
                class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-green-500">

            <label class="block mb-2 font-semibold">Penerbit:</label>
            <input type="text" name="penerbit" value="<?= esc($buku['penerbit'] ?? old('penerbit')) ?>" required
                class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-green-500">

            <label class="block mb-2 font-semibold">Tahun Terbit:</label>
            <input type="number" name="tahun_terbit" value="<?= esc($buku['tahun_terbit'] ?? old('tahun_terbit')) ?>" required
                class="w-full p-3 mb-6 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-green-500">

            <button type="submit"
                class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition">Simpan</button>
        </form>

        <div class="text-center mt-4">
            <a href="/buku" class="text-green-600 font-semibold hover:underline">← Kembali ke Data Buku</a>
        </div>
    </div>
</body>
</html>
