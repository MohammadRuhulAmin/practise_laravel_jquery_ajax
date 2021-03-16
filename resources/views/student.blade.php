<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Information</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    

    <div class="jumbotron">
        <h3>Register a Student</h3>
        <div id="message">
            <p class="alert alert-success">New Student is Registered Successfully <button id="crossBtn" class="btn btn-danger">X</button></p>
        </div>
        <div id="errorMessage">
            <p class="alert alert-danger">Insert All the fields Properly <button id="crossBtn_error" class="btn btn-danger">X</button></p>
        </div>
        <form id="studentForm">
            @csrf 
            <label class="form-control">Student Name </label>
            <input class="form-control" type="text" name="student_name" id="student_name">
            <label class="form-control">Student Email</label>
            <input class="form-control" type="email" name="student_email" id="student_email">
            <label class="form-control">Contact</label>
            <input class="form-control" type="text" name="student_contact" id="student_contact">
            <button class="btn btn-success" id="addStudent">Save Student</button>
        </form>
        
    </div>
    <div class="jumbotron">
        <h3>Students List</h3>
        <table class="table table-striped">
            <tr>
                <td>#</td>
                <td>Student Name</td>
                <td>Email</td>
                <td>Contact</td>
                <td>Action </td>
            </tr>
            <tbody id="tbody">

            </tbody>
        </table>
    </div>



    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jqajax.js')}}"></script>
</body>
</html>