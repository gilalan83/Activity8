<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes</title>
</head>
<body>
    <h1>Superheroes List</h1>
    <a href="{{ route('superheroes.create') }}">Add New Superhero</a>
    <table border="1">
        <thead>
            <tr>
                <th>Hero Name</th>
                <th>Real Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $superhero)
            <tr>
                <td>{{ $superhero->hero_name }}</td>
                <td>{{ $superhero->real_name }}</td>
                <td>
                    <a href="{{ route('superheroes.show', $superhero) }}">View</a>
                    <a href="{{ route('superheroes.edit', $superhero) }}">Edit</a>
                    <form action="{{ route('superheroes.destroy', $superhero) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>