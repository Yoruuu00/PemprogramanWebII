<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Utama</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      background-image: url("https://cdnb.artstation.com/p/assets/covers/images/032/902/059/large/joseph-jacobs-joseph-jacobs-image2-render.jpg?1607813186");
      background-size: cover;
      background-position: center;
      position: relative;
    }

    body::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 0;
    }

    .container {
      position: relative;
      z-index: 1;
      background-color: rgba(255, 255, 255, 0.85);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.3);
      max-width: 500px;
      margin: auto;
      top: 50%;
      transform: translateY(-50%);
      text-align: center;
    }

    h1 {
      margin-bottom: 30px;
      color: #333;
      font-size: 28px;
    }

    .menu-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .menu-container a {
      padding: 14px;
      background: linear-gradient(135deg, #4caf50, #388e3c);
      color: white;
      text-decoration: none;
      border-radius: 10px;
      font-weight: 600;
      font-size: 16px;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .menu-container a:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.3);
    }

    @media (max-width: 600px) {
      .menu-container {
        gap: 15px;
      }

      .menu-container a {
        font-size: 14px;
        padding: 12px;
      }
    }

    .logout-btn {
      margin-top: 30px;
      display: inline-block;
      padding: 12px 20px;
      background-color: #e53935;
      color: white;
      border-radius: 10px;
      font-weight: 600;
      text-decoration: none;
    }

    .logout-btn:hover {
      background-color: #c62828;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Menu Akses Tabel</h1>
    <div class="menu-container">
      <a href="/buku">Tabel Buku</a>
      <a href="/peminjaman">Tabel Peminjaman</a>
      <a href="/member">Tabel Member</a>
    </div>
    <a href="/logout" class="logout-btn">Logout</a>
  </div>
</body>
</html>
