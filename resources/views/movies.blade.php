<h1>Film:</h1>
<ul>
    @foreach ($movies as $movie)
    <li>
        <h3>{{ $movie->title }}</h3>
    </li>        
    @endforeach
</ul>