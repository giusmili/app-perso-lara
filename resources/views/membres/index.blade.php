<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membre</title>
    {{-- <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}"> --}}
</head>
<body>
    <h2>Liste des membres</h2>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($membres as $membre)
                <tr>
                    <td>{{ $membre->nom }}</td>
                    <td>{{ $membre->prenom }}</td>
                    <td>{{ $membre->email }}</td>
                    <td>{{ $membre->ville }}</td>
                    <td>{{ $membre->pays }}</td>
                    <td>{{ $membre->date }}</td>
                    <td>
                       
                        <a href="{{ route('membres.edit', $membre->id) }}">Modifier</a>
                        {{-- On ajoutera la suppression ici plus tard --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>