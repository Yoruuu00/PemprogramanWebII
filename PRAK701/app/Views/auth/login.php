<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-center">Masuk ke Sistem</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="/login">
            <label class="block mb-2 font-semibold">Masukkan Username:</label>
            <input type="text" name="username" class="w-full p-2 mb-4 border rounded" required>

            <label class="block mb-2 font-semibold">Password:</label>
            <input type="password" name="password" class="w-full p-2 mb-4 border rounded" required>

            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded">
                Login
            </button>
        </form>
    </div>
</body>
</html>
