@include('partial.head')

{{-- head --}}
    <body>
    
        <header>
        <h1><span class="align-v" aria-hidden="true">📂</span>{{ $title }}</h1>
    </header>
    <main>
    
      <section>
        <h2>{{ $title}}</h2>
        <p>
        Before lunch several of the passengers organized a pool, which could not fail to please those fond of betting and gambling. The result of this pool was not to be known for four days; it was what is called the 'pilot's pool.' When a ship arrives at the land-falls every one knows that a pilot comes on board; so they divide the twenty-four hours of the day and night into forty-eight half-hours, or ninety-six quarters, according to the number of the passengers.
        </p>
 

        <table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Pays</th>
            <th>Date d'inscription</th>
        </tr>
    </thead>
    <tbody>
        @foreach($membres as $membre)
        <tr>
            <td>{{ $membre->nom }}</td>
            <td>{{ $membre->prenom }}</td>
            <td>{{ $membre->email }}</td>
            <td>{{ $membre->pays }}</td>
            <td>{{ \Carbon\Carbon::parse($membre->created_at)->translatedFormat('d m Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/" class="btn-default btn-secondary">Home</a>


        
      </section>
    </main>
    @include('partial.footer')
        <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
    </body>
</html>