<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
   <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
</head>
<body>
<header>
    <h1>Hello, {{ session('admin_email') }} vous êtes admin</h1>
</header>
<main>
<section>
    <div class="picture">
        <img src="https://raw.githubusercontent.com/giusmili/lgc-complet-php/refs/heads/master/asset/cover.jpg"
        alt="cover">
    </div>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn-default btn-warning btn-align">Se déconnecter</button>
    </form>
</section>
</main>
</body>
</html>
