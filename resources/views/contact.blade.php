@include('partial.head')

{{-- head --}}
    <body>
    
        <header>
        <h1><span class="align-v" aria-hidden="true">📂</span>{{ $title }}</h1>
    </header>
    <main>
   

        @if(session('success'))
            <p class="success">
              {{ session('success') }}
          </p>
        @endif


      <section>
        <h2>{{ $titre }}</h2>
        
        <form action="{{ route('contact.store') }}" method="POST">@csrf
   
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
   
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
 
    <button type="submit"  class="btn-default btn-success">Enregistrer</button>
</form>
      </section>
    </main>
    @include('partial.footer')
        <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
  
    </body>
</html>
