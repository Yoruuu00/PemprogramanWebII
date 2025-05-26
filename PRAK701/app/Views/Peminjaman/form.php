<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= isset($peminjaman) ? 'Edit Peminjaman' : 'Tambah Peminjaman' ?></title>
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
      <?= isset($peminjaman) ? 'Edit Peminjaman' : 'Tambah Peminjaman' ?>
    </h1>

    <?php if (session()->getFlashdata('errors')): ?>
      <div class="bg-red-100 text-red-700 p-4 rounded mb-4 text-sm">
        <?php foreach (session()->getFlashdata('errors') as $e): ?>
          <div>- <?= esc($e) ?></div>
        <?php endforeach ?>
      </div>
    <?php endif ?>

    <form method="post" action="<?= isset($peminjaman) ? '/peminjaman/update/'.$peminjaman['id'] : '/peminjaman/store' ?>">
      
      <label class="block font-semibold mb-1">Nama Member:</label>
      <select name="member_id" class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none" required>
        <option value="">-- Pilih Member --</option>
        <?php foreach ($members as $m): ?>
          <option value="<?= $m['id'] ?>" <?= (old('member_id') ?? $peminjaman['member_id'] ?? '') == $m['id'] ? 'selected' : '' ?>>
            <?= esc($m['nama']) ?>
          </option>
        <?php endforeach ?>
      </select>

      <label class="block font-semibold mb-1">Judul Buku:</label>
      <select name="buku_id" class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none" required>
        <option value="">-- Pilih Buku --</option>
        <?php foreach ($buku as $b): ?>
          <option value="<?= $b['id'] ?>" <?= (old('buku_id') ?? $peminjaman['buku_id'] ?? '') == $b['id'] ? 'selected' : '' ?>>
            <?= esc($b['judul']) ?>
          </option>
        <?php endforeach ?>
      </select>

      <label class="block font-semibold mb-1">Tanggal Pinjam:</label>
      <input type="date" name="tanggal_pinjam" value="<?= esc($peminjaman['tanggal_pinjam'] ?? old('tanggal_pinjam')) ?>"
        class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none" required>

      <label class="block font-semibold mb-1">Tanggal Kembali:</label>
      <input type="date" name="tanggal_kembali" value="<?= esc($peminjaman['tanggal_kembali'] ?? old('tanggal_kembali')) ?>"
        class="w-full p-3 mb-6 border border-gray-300 rounded-lg focus:outline-none" required>

      <button type="submit"
        class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition">Simpan</button>
    </form>

    <div class="text-center mt-4">
      <a href="/peminjaman" class="text-green-600 font-semibold hover:underline">← Kembali ke Data Peminjaman</a>
    </div>
  </div>
</body>
</html>
