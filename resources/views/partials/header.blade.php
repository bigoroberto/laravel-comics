<header>
    <nav class="wrap">  
        <img src="{{ asset('img/dc-logo.png') }}" alt="">
        <ul>
            <li><a href="{{ route('characters')}}" class="{{ (request()-> is ('characters')) ? 'active' : ' ' }}">CHARACTERS</a></li>
            <li><a href="{{ route('comics')}}" class="{{ (request()-> is ('/')) ? 'active' : ' ' }}">COMICS</a></li>
            <li><a href="{{ route('movies')}}" class="{{ (request()-> is ('movies')) ? 'active' : ' ' }}">MOVIES</a></li>
            <li><a href="{{ route('tv')}}" class="{{ (request()-> is ('tv')) ? 'active' : ' ' }}">TV</a></li>
            <li><a href="{{ route('games')}}" class="{{ (request()-> is ('games')) ? 'active' : ' ' }}">GAMES</a></li>
            <li><a href="{{ route('collectibles')}}" class="{{ (request()-> is ('collectibles')) ? 'active' : ' ' }}">COLLECTIBLES</a></li>
            <li><a href="{{ route('videos')}}" class="{{ (request()-> is ('videos')) ? 'active' : ' ' }}">VIDEOS</a></li>
            <li><a href="{{ route('fans')}}" class="{{ (request()-> is ('fans')) ? 'active' : ' ' }}">FANS</a></li>
            <li><a href="{{ route('news')}}" class="{{ (request()-> is ('news')) ? 'active' : ' ' }}">NEWS</a></li>
            <li><a href="{{ route('shop')}}" class="{{ (request()-> is ('shop')) ? 'active' : ' ' }}">SHOP</a></li>
        </ul>   
    </nav>
    <div class="_jumbotron"></div>
</header>