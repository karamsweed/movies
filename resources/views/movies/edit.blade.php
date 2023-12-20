<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movies</title>
    <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
    @vite('resources/css/edit.css')
    <style>


    </style>
</head>
<body>

    <h2>Edit Song</h2>

    <div class="form-container">
        <form method="POST" action="{{ route('movies.update', ['id' => $movie->id]) }}">
            @csrf
            @method('PATCH') <!-- Use PATCH method for updating -->

            <div class="form-row">
                <label for="name">movie Name:</label>
                <input type="text" id="name" name="name" value="{{ $movie->name }}" required>
            </div>

            <div class="form-row">
                <label for="director">movie director:</label>
                <input type="text" id="director" name="director" value="{{ $movie->director }}" required>
            </div>
            <div class="form-row">
                <label for="cost">movie cost:</label>
                <input type="number" id="cost" name="cost" value="{{ $movie->cost }}" required>
            </div>

            <div class="form-row">
                <label for="year">movie year:</label>
                <input type="number" id="number" name="number" value="{{ $movie->year }}" required>
            </div>

            <div class="form-row">
                <input type="submit" value="Update">
            </div>
        </form>
    </div>

</body>
</html>
