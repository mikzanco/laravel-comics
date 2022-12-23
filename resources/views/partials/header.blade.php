<header>

    <div class="container">

      <div>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC Comics">
      </div>

      <nav>

        <ul>
          <li>
            <a class="{{ Route::currentRouteName() ===  'Character' ? 'active' : ' '}}" href="{{ route('character') }}">Character</a>
          </li>
          <li>
            <a class="{{ Route::currentRouteName() ===  'Comics' ? 'active' : ' '}}" href="{{ route('comics') }}">Comics</a>
          </li>
          <li>
            <a class="{{ Route::currentRouteName() ===  'TV' ? 'active' : ' '}}" href="{{ route('tv') }}">TV</a>
          </li>
          <li>
            <a class="{{ Route::currentRouteName() ===  'Movies' ? 'active' : ' '}}" href="{{ route('movies') }}">Movies</a>
          </li>
          <li>
            <a class="{{ Route::currentRouteName() ===  'Games' ? 'active' : ' '}}" href="{{ route('games') }}">Games</a>
          </li>
          <li>
            <a class="{{ Route::currentRouteName() ===  'Collectibles' ? 'active' : ' '}}" href="{{ route('collectibles') }}">Collectibles</a>
          </li>
          <li>
            <a class="{{ Route::currentRouteName() ===  'Videos' ? 'active' : ' '}}" href="{{ route('videos') }}">Videos</a>
          </li>
          <li>
            <a class="{{ Route::currentRouteName() ===  'Fans' ? 'active' : ' '}}" href="{{ route('fans') }}">Fans</a>
          </li>
          <li>
            <a class="{{ Route::currentRouteName() ===  'News' ? 'active' : ' '}}" href="{{ route('news') }}">News</a>
          </li>
          <li>
            <a class="{{ Route::currentRouteName() ===  'Shop' ? 'active' : ' '}}" href="{{ route('home') }}">Shop</a>
          </li>

        </ul>

      </nav>

    </div>

</header>


