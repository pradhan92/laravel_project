<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New student</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1 >All Student Record </h1>
    <table class="table">
        <tr>
            <th>SN</th>
            <th>Student Name</th>
            <th>Student Address</th>
            <th>Student Contact</th>
            <th>Student Course</th>
            <th>Student Email</th>
            <th>Student Remark</th>
            <th>Student status</th>
            <th>Action</th>

        </tr>
        @foreach ($students as $index=>$student)
        <tr>
            <td>{{++$index}}</td>
            <td>{{ $student->name}}</td>
            <td>{{ $student->address}}</td>
            <td>{{ $student->contact}}</td>
            <td>{{ $student->course}}</td>
            <td>{{ $student->email}}</td>
            <td>{{ $student->remark}}</td>
            <td>{{ $student->status}}</td>
            <td>
                <form action="/student/{{ $student->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <a href="/student/{{ $student->id}}" class="badge bg-primary">Edit</a>
                    <button type="submit" class=" btn badge bg-danger">delete</button>
                </form>
            </td>
@endforeach
        </tr>
    </table>
    <a href="/" class="btn btn-primary btn-sm">New Student</a>
</body>
</html>
