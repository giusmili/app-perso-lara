<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Édition membre</title>
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
</head>
<body>
    <header>
        <h1>Modifier un membre</h1>
    </header>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <main>
            <section>
                <fieldset>
                    <legend>Mettre à jour les données</legend>
            <form action="{{ route('membres.update', $membre->id) }}" method="POST">
                @csrf
                @method('PUT')
        
                <label>Nom:</label>
                <input type="text" name="nom" value="{{ old('nom', $membre->nom) }}" required autofocus><br>
        
                <label>Prénom:</label>
                <input type="text" name="prenom" value="{{ old('prenom', $membre->prenom) }}" required><br>
        
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email', $membre->email) }}" required><br>
        
                <label>Ville:</label>
                <input type="text" name="ville" value="{{ old('ville', $membre->ville) }}"><br>
        
                <label>Pays:</label>
                <input type="text" name="pays" value="{{ old('pays', $membre->pays) }}"><br>
        
                <label>Date:</label>
                <input type="date" name="date" value="{{ old('date', $membre->date) }}"><br>
        
                <button type="submit" class="btn-default btn-success">Mettre à jour</button>
            </form>
        </fieldset>
        </section>
    </main>
 <footer>
    <p>&copy; - MIT - {{ date('Y') }}</p>
 </footer>
</body>
</html>
