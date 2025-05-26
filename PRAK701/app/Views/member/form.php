<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= isset($member) ? "Edit Member" : "Tambah Member" ?></title>
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
      <?= isset($member) ? "Edit Member" : "Tambah Member" ?>
    </h1>

    <?php if (session()->getFlashdata('errors')): ?>
      <div class="bg-red-100 text-red-700 p-4 rounded mb-4 text-sm">
        <?php foreach (session()->getFlashdata('errors') as $e): ?>
          <div>- <?= esc($e) ?></div>
        <?php endforeach ?>
      </div>
    <?php endif ?>

    <form method="post" action="<?= isset($member) ? '/member/update/'.$member['id'] : '/member/store' ?>">
      <label class="block font-semibold mb-1">Nama:</label>
      <input type="text" name="nama" value="<?= esc($member['nama'] ?? old('nama')) ?>" class="w-full p-3 mb-4 border border-gray-300 rounded-lg" required>

      <label class="block font-semibold mb-1">Alamat:</label>
      <textarea name="alamat" class="w-full p-3 mb-4 border border-gray-300 rounded-lg" required><?= esc($member['alamat'] ?? old('alamat')) ?></textarea>

      <label class="block font-semibold mb-1">Telepon:</label>
      <input type="text" name="telepon" value="<?= esc($member['telepon'] ?? old('telepon')) ?>" class="w-full p-3 mb-4 border border-gray-300 rounded-lg" required>

      <label class="block font-semibold mb-1">Tanggal Mendaftar:</label>
      <input type="date" name="tanggal_mendaftar" value="<?= esc($member['tanggal_mendaftar'] ?? old('tanggal_mendaftar')) ?>" class="w-full p-3 mb-4 border border-gray-300 rounded-lg" required>

      <label class="block font-semibold mb-1">Tanggal Terakhir Bayar:</label>
      <input type="date" name="tanggal_terakhir_bayar" value="<?= esc($member['tanggal_terakhir_bayar'] ?? old('tanggal_terakhir_bayar')) ?>" class="w-full p-3 mb-6 border border-gray-300 rounded-lg" required>

      <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition">Simpan</button>
    </form>

    <div class="text-center mt-4">
      <a href="/member" class="text-green-600 font-semibold hover:underline">← Kembali ke Data Member</a>
    </div>
  </div>
</body>
</html>
