<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Superhero</title>
</head>
<body>
    <h1>Edit Superhero</h1>
    <a href="{{ route('superheroes.index') }}">Back to list</a>
    <form action="{{ route('superheroes.update', $superhero) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Real Name:</label>
            <input type="text" name="real_name" value="{{ $superhero->real_name }}">
        </div>
        <div>
            <label>Hero Name:</label>
            <input type="text" name="hero_name" value="{{ $superhero->hero_name }}">
        </div>
        <div>
            <label>Photo URL:</label>
            <input type="text" name="photo_url" value="{{ $superhero->photo_url }}">
        </div>
        <div>
            <label>Info:</label>
            <textarea name="info">{{ $superhero->info }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>