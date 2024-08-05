<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Student Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$student->name}}</h5>
                <p class="card-text"><strong>Email:</strong>{{$student->email}}</p>
                <p class="card-text"><strong>Course:</strong>{{$student->course}}</p>
                <a href="{{route('students.edit', $student->id)}}" class="btn btn-warning">Edit</a>
                <form action="{{route('students.destroy', $student->id)}}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{route('students.index')}}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>