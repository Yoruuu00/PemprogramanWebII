<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-5xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Data Buku</h1>

        <div class="flex flex-col md:flex-row justify-center gap-4 mb-6">
            <a href="/utama" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-full text-center shadow">← Kembali ke Halaman Awal</a>
            <a href="/buku/create" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-full text-center shadow">+ Tambah Buku</a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Judul</th>
                        <th class="px-4 py-3">Pengarang</th>
                        <th class="px-4 py-3">Penerbit</th>
                        <th class="px-4 py-3">Tahun Terbit</th>
                        <th class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-800">
                    <?php if (!empty($buku)) : ?>
                        <?php foreach ($buku as $i => $b): ?>
                            <tr class="border-t hover:bg-gray-100">
                                <td class="px-4 py-3"><?= $i + 1 ?></td>
                                <td class="px-4 py-3"><?= esc($b['judul']) ?></td>
                                <td class="px-4 py-3"><?= esc($b['pengarang']) ?></td>
                                <td class="px-4 py-3"><?= esc($b['penerbit']) ?></td>
                                <td class="px-4 py-3"><?= esc($b['tahun_terbit']) ?></td>
                                <td class="px-4 py-3">
                                    <a href="/buku/edit/<?= $b['id'] ?>" class="text-green-600 hover:underline font-medium">Edit</a>
                                    <a href="/buku/delete/<?= $b['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')" class="text-red-500 hover:underline font-medium ml-2">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" class="px-4 py-6 text-center text-gray-500">Tidak ada data buku.</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
