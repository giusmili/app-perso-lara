@include('partial.head')


{{-- head --}}
    <body>
    
        <header>
        <h1><span class="align-v" aria-hidden="true">📂</span>{{ $title }}</h1>
    </header>
    <main>
   
    
        <section>
            <h2><span class="align-v" aria-hidden="true">💻</span>Projet</h2>
            <p>In four days, at the latest, the 'Great Eastern' must reach New York harbour;
             therefore we might hope that accident would not dally with our watchfulness</p>
             <a href="/" class="btn-default btn-secondary">Search in the web</a>
             <a href="liste" class="btn-default btn-secondary">Search in list</a>
        </section>

          <section>
            <h2>Langages de programmation</h2>
    <table>
 {{--    <caption>
        La liste des donéees
    </caption> --}}   
        <thead>
            <tr>
                <th>Langage</th>
                <th>Type</th> 
                <th>Version</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($lang as $item)
          {{--   {{ dd($lang) }} --}}
            <tr>
                <td>{{ $item['lang']}}</td>
                <td>{{ $item['type']}}</td>
                <td>{{ $item['version']}}</td>
            </tr>
         
        @endforeach
        </tbody>
    </table>
                
             {{--    <ul class="list-lang">
                @foreach ($lang as $item)
                    <li>{{ $item['lang']}}, type : {{ $item['type']}}, Version : {{ $item['version']}}</li>
                    
                @endforeach
                    
                </ul> --}}
           
          
        </section>
    </main>
    @include('partial.footer')
        <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
    </body>
</html>