<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD - Stupid Project Management tool </title>
</head>
<body>
<h1 class="display-1">CRUD - Stupid Project Management Tool</h1>
<a class="btn btn-success" href="/issues/create">Add issue</a>
<table class="table table-dark table-striped">
    <thead>
    <tr class="table-primary">
        <th scope="col">#</th>
        <th scope="col">subject</th>
        <th scope="col">description</th>
        <th scope="col">status</th>
        <th scope="col">priority</th>
        <th scope="col">assignee</th>
        <th scope="col">start_date</th>
        <th scope="col">due_date</th>
        <th scope="col">created_at</th>
        <th scope="col" colspan="2">operations</th>

    </tr>
    </thead>
    <tbody>
    @foreach($issues as $issue)

        <tr>
            <td class="table-info">{{ $issue->id }}</td>
            <td class="table-info">{{ $issue->subject }}</td>
            <td class="table-info">{{ $issue->description }}</td>
            <td class="table-info">{{ $issue->status }}</td>
            <td class="table-info">{{ $issue->priority }}</td>
            <td class="table-info">{{ $issue->assignee }}</td>
            <td class="table-info">{{ $issue->start_date }}</td>
            <td class="table-info">{{ $issue->due_date }}</td>
            <td class="table-info">{{ $issue->created_at }}</td>
            <td class="table-warning">
                <a href=" {{ url('/issues/'.$issue->id) }}" class="btn btn-primary">Update</a>
            </td>

            <td class="table-warning"> <form action="{{ url('/issues/'.$issue->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-warning">Delete</button>
                </form>

            </td>
        </tr>
    @endforeach

    </tbody>
</table>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
