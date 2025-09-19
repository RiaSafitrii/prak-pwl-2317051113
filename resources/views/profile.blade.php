<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: url('{{ asset("images/purple.jpg") }}') no-repeat center center fixed;
            background-size: cover;
        }
        .profile-card {
            background: rgba(255, 255, 255, 0.36);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            text-align: center;
            width: 340px;
            transition: transform 0.3s ease;
        }
        .profile-card:hover {
            transform: translateY(-8px);
        }
        .profile-img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(106,17,203,0.4);
        }
        .profile-info {
            background: #f3e8ff;
            margin: 12px 0;
            padding: 14px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            color:rgb(58, 5, 114);
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <img src="{{ asset('images/Riri3.jpg') }}" alt="Foto Profil" class="profile-img">

        <div class="profile-info"> Nama : {{ $nama }}</div>
        <div class="profile-info"> Kelas : {{ $kelas }}</div>
        <div class="profile-info"> Npm : {{ $npm }}</div>
    </div>
</body>
</html>