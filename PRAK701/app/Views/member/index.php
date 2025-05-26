<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Member</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Data Member</h1>

    <div class="flex flex-col md:flex-row justify-center gap-4 mb-6">
        <a href="/utama" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-full shadow">← Kembali ke Halaman Awal</a>
        <a href="/member/create" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-full shadow">+ Tambah Member</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border border-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3">Telepon</th>
                    <th class="px-4 py-3">Tgl Mendaftar</th>
                    <th class="px-4 py-3">Tgl Terakhir Bayar</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-800">
                <?php if (!empty($member)) : ?>
                    <?php foreach ($member as $i => $m): ?>
                        <tr class="border-t hover:bg-gray-100">
                            <td class="px-4 py-3"><?= $i+1 ?></td>
                            <td class="px-4 py-3"><?= esc($m['nama']) ?></td>
                            <td class="px-4 py-3"><?= esc($m['alamat']) ?></td>
                            <td class="px-4 py-3"><?= esc($m['telepon']) ?></td>
                            <td class="px-4 py-3"><?= esc($m['tanggal_mendaftar']) ?></td>
                            <td class="px-4 py-3"><?= esc($m['tanggal_terakhir_bayar']) ?></td>
                            <td class="px-4 py-3 space-x-2">
                                <a href="/member/edit/<?= $m['id'] ?>" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded shadow text-sm font-semibold">Edit</a>
                                <a href="/member/delete/<?= $m['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded shadow text-sm font-semibold">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else : ?>
                    <tr><td colspan="7" class="text-center text-gray-500 px-4 py-6">Tidak ada data member.</td></tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</body>
</html>
