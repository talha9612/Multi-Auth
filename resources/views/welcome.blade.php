<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(45deg, #1d2b64, #f8cdda);
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .welcome-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
        }
        .welcome-container h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease-out;
        }
        .welcome-container p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            animation: fadeInUp 1.5s ease-out;
        }
        .welcome-container a {
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .welcome-container a.btn-primary {
            background-color: #1d2b64;
            color: #fff;
            border: none;
        }
        .welcome-container a.btn-primary:hover {
            background-color: #f8cdda;
            color: #1d2b64;
        }
        .welcome-container a.btn-outline-light {
            border-color: #fff;
            color: #fff;
        }
        .welcome-container a.btn-outline-light:hover {
            background-color: #fff;
            color: #1d2b64;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Our Platform</h1>
        <p>Explore our features and enjoy a seamless experience.</p>
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register/admin') }}" class="btn btn-outline-light ms-3">Register as Admin</a>
        <a href="{{ route('register/user') }}" class="btn btn-outline-light ms-3">Register as User</a>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
