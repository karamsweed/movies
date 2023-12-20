<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>

    <h1>Movies Table</h1>

    <div class="moves-list">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Director</th>
                    <th>Cost</th>
                    <th>year</th>
                    <th>Action</th>
                </tr>
                <thead>
                <tbody>
                    @foreach($moves as $move)
                    <tr>
                        <td>
                            <a>{{ $move->name }}</a>
                        </td>
                        <td>{{ $move->director }}</td>
                        <td>{{ $move->cost }}</td>
                        <td>{{ $move->year }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('movies.edit', ['id' => $move->id]) }}">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>
                            <form action="{{ route('movies.destroy', ['id' => $move->id]) }}" method="POST"
                                style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this move?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                </button>
                            </form>
    </div>
    </td>
    </tr>
    @endforeach
    </tbody>

    </thead>
</div>




        <div class="create">
            <form method="GET" action="{{ route('create') }}">
                @csrf
                <button class="createbtn" type="submit">New create</button>
            </form>
        </div>



</body>

</html>
