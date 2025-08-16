<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendyol Giriş</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .login-card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-card h2 {
            font-weight: bold;
            color: #ee4d2d; /* Trendyol renkleri */
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-trendyol {
            background-color: #ee4d2d;
            color: white;
            width: 100%;
            font-weight: bold;
        }

        .btn-trendyol:hover {
            background-color: #d03d1f;
            color: white;
        }

        .forgot-password {
            font-size: 0.9rem;
            text-align: right;
            display: block;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>Trendyol</h2>
        <form action="/giris" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email veya Telefon</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email veya Telefon" required>
            </div>
            <div class="mb-3">
                <label for="sifre" class="form-label">Şifre</label>
                <input type="password" name="sifre" id="sifre" class="form-control" placeholder="Şifre" required>
                <a href="#" class="forgot-password">Şifreni mi unuttun?</a>
            </div>
            <button type="submit" class="btn btn-trendyol mb-3">Giriş Yap</button>
        </form>
        <div class="text-center">
            <span>Hesabın yok mu? </span><a href="#">Üye Ol</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
