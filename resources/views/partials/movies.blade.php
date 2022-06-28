

<h1>Film:</h1>

<div class="container">
    <ul>
        @foreach ($movies as $movie)
        <li>
            <h3>{{ $movie->title }}</h3>
            <p>{{ $movie->original_title}}</p>
            <p>{{ $movie->nationality}}</p>
            <p>{{ $movie->date}}</p>
            <p>{{ $movie->vote}}</p>
        </li>
        @endforeach
    </ul>
</div>