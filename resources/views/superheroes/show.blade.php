<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero Detail</title>
</head>
<body>
    <h1>{{ $superhero->hero_name }}</h1>
    <a href="{{ route('superheroes.index') }}">Back to list</a>
    <br><br>
    <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->hero_name }}" width="200">
    <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
    <p><strong>Hero Name:</strong> {{ $superhero->hero_name }}</p>
    <p><strong>Info:</strong> {{ $superhero->info }}</p>
    <a href="{{ route('superheroes.edit', $superhero) }}">Edit</a>
    <form action="{{ route('superheroes.destroy', $superhero) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>