<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a New Movie</title>
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
    @vite('resources/css/create.css')
    <style>
      
    </style>
</head>
<body>
    <h2>Edit Moves</h2>
    <form method="GET" action="{{ route('movies.index') }}">
        @csrf
        <button class="indexbtn" type="submit">Back to moves</button>
    </form>

    <div class="form-container">
        <h2>Create a New Movie</h2>
        <form method="POST" action="{{ route('movies.store') }}">
            @csrf
            <div class="form-row">
                <label for="name">Movie Title:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-row">
                <label for="director">Director:</label>
                <input type="text" id="director" name="director" required>
            </div>
            <div class="form-row">
                <label for="cost">Cost:</label>
                <input type="text" id="cost" name="cost" required>
            </div>
            <div class="form-row">
                <label for="year">Year:</label>
                <input type="text" id="year" name="year" required>
            </div>
            <div class="form-row">
                <input type="submit" value="Create">
            </div>
        </form>
    </div>
</body>
</html>
