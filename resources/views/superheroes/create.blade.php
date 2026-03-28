<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Superhero</title>
</head>
<body>
    <h1>Add New Superhero</h1>
    <a href="{{ route('superheroes.index') }}">Back to list</a>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <div>
            <label>Real Name:</label>
            <input type="text" name="real_name">
        </div>
        <div>
            <label>Hero Name:</label>
            <input type="text" name="hero_name">
        </div>
        <div>
            <label>Photo URL:</label>
            <input type="text" name="photo_url">
        </div>
        <div>
            <label>Info:</label>
            <textarea name="info"></textarea>
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>