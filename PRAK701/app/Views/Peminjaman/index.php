<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Data Peminjaman</h1>

    <div class="flex flex-col md:flex-row justify-center gap-4 mb-6">
        <a href="/utama" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-full shadow">← Kembali ke Halaman Awal</a>
        <a href="/peminjaman/create" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-full shadow">+ Tambah Peminjaman</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border border-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Nama Member</th>
                    <th class="px-4 py-3">Judul Buku</th>
                    <th class="px-4 py-3">Tanggal Pinjam</th>
                    <th class="px-4 py-3">Tanggal Kembali</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-800">
                <?php if (!empty($peminjaman)) : ?>
                    <?php foreach ($peminjaman as $i => $p): ?>
                        <tr class="border-t hover:bg-gray-100">
                            <td class="px-4 py-3"><?= $i+1 ?></td>
                            <td class="px-4 py-3"><?= esc($p['member']) ?></td>
                            <td class="px-4 py-3"><?= esc($p['buku']) ?></td>
                            <td class="px-4 py-3"><?= esc($p['tanggal_pinjam']) ?></td>
                            <td class="px-4 py-3"><?= esc($p['tanggal_kembali']) ?></td>
                            <td class="px-4 py-3 space-x-2">
                                <a href="/peminjaman/edit/<?= $p['id'] ?>" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded shadow text-sm font-semibold">Edit</a>
                                <a href="/peminjaman/delete/<?= $p['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded shadow text-sm font-semibold">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center text-gray-500 px-4 py-6">Tidak ada data peminjaman.</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</body>
</html>
