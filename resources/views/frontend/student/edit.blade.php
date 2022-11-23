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
    <h1>Edit Student record in Management System</h1>
    <div class="container">
        <div class="row ">
          <form action="/student/{{ $student->id }}" method="post">
          @method('put')
            @csrf
          <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Student Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{$student->name}}">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="address">Student Address</label>
                    <input id="address" class="form-control" type="text" name="address" value="{{$student->address}}">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="contact">Student Contact</label>
                    <input id="contact" class="form-control" type="tell" name="contact" value="{{$student->contact}}">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="email">Student Email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{$student->email}}">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="course">Student Course</label>
                    <input id="course" class="form-control" type="text" name="course" value="{{$student->course}}">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="remark">Student Remark</label>
                    <input id="remark" class="form-control" type="text" name="remark" value="{{$student->remark}}">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="status">Student Status</label>
                    <input id="status" class="form-control" type="text" name="status" value="{{$student->status}}">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-sm my-2">Update Record</button>
                    <a href="/student" class="btn btn-primary btn-sm my-2">Show all Record</a>
                    <a href="/" class="btn btn-primary btn-sm my-2">New Student</a>
                </div>
            </div>
          </form>
        </div>
    </div>
</body>
</html>
