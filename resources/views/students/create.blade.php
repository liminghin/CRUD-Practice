<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a new Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Create a new Student</h2>
        <form method="POST" action="{{route('students.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" name="form-control" id="course" name="course" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>