<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-uppercase text-center my-5">Edit Student</h1>
        <form action="/user/update/{{$user['id']}}" method="post">
            <input type="hidden" name="id" value="{{$user['id']}}">
            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            @endif
            <div class="mb-3">
                <label for="exampleInputCode" class="form-label fw-bold text-uppercase">Student Code</label>
                <input type="text" class="form-control" id="exampleInputCode" name="namecode" value="{{$user['namecode']}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label fw-bold text-uppercase">Full Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="fullname" value="{{$user['fullname']}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputDate" class="form-label fw-bold text-uppercase">Date of Birth</label>
                <input type="date" class="form-control" id="exampleInputDate" name="datebirth" value="{{$user['datebirth']}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputAddress" class="form-label fw-bold text-uppercase">Address</label>
                <input type="text" class="form-control" id="exampleInputAddress" name="address" value="{{$user['address']}}">
            </div>
            <label class="form-label fw-bold text-uppercase">Gender</label>
            <div class="mb-3 form-check d-flex gap-5">
                <div>
                    <input type="radio" class="form-check-input" id="maleRadio" name="gender" value="1" {{ $user['gender'] == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="maleRadio">Male</label>
                </div>
                <div>
                    <input type="radio" class="form-check-input" id="femaleRadio" name="gender" value="0" {{ $user['gender'] == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="femaleRadio">Female</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputClass" class="form-label fw-bold text-uppercase">Class</label>
                <input type="text" class="form-control" id="exampleInputClass" name="class" value="{{$user['class']}}">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-uppercase">Department</label>
                <select class="form-select" name="department">
                    <option value="1" {{ $user['department'] == 1 ? 'selected' : '' }}>Công Nghệ Thông Tin</option>
                    <option value="2" {{ $user['department'] == 2 ? 'selected' : '' }}>Kế Toán</option>
                    <option value="3" {{ $user['department'] == 3 ? 'selected' : '' }}>Hệ Thống Thông Tin</option>
                </select>
            </div>

            {{csrf_field()}}
            <button type="submit" class="btn btn-outline-primary">Update</button>
            <a href="/user" class="btn btn-outline-secondary">Cancel</a>
        </form>
    </div>
</body>

</html>