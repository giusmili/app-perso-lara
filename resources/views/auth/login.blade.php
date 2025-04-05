@include('/partial.head')
<body class="container mt-5">
<header>
    <h1>Connexion Admin 🔒</h1>
</header>
  
<main>
<section>
   {{--  id incorrect --}}
   @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
 {{--  id correct --}}
  @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}🔒️</p>
    @endif
    <form action="{{ url('/login') }}" method="POST">
        @csrf

            <label for="email" class="form-label">Email :</label>
            <input type="email" name="email" class="form-control" required>
     

     
            <label for="password" class="form-label">Mot de passe :</label>
            <input type="password" name="password" class="form-control" required>
       

        <button type="submit" class="btn-default btn-success">Se connecter</button>
    </form>
<section>
</main>
     @include('/partial.footer')
</body>
</html>
