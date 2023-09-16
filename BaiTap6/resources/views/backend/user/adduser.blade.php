<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuogBachDev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-uppercase text-center my-5">Add new students</h1>
        <form action="/user/store" method="post">
            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            @endif
            <div class="mb-3">
                <label for="exampleInputCode" class="form-label fw-bold text-uppercase">Student Code</label>
                <input type="text" class="form-control" id="exampleInputCode" name="namecode">
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label fw-bold text-uppercase">FullName</label>
                <input type="text" class="form-control" id="exampleInputName" name="fullname">
            </div>
            <div class="mb-3">
                <label for="exampleInputDate" class="form-label fw-bold text-uppercase">Date of birth</label>
                <input type="date" class="form-control" id="exampleInputDate" name="datebirth">
            </div>
            <div class="mb-3">
                <label for="exampleInputAddress" class="form-label fw-bold text-uppercase">Address</label>
                <input type="text" class="form-control" id="exampleInputAddress" name="address">
            </div>
            <label class="form-label fw-bold text-uppercase">Gender</label>
            <div class="mb-3 form-check d-flex gap-5">
                <div>
                    <input type="radio" class="form-check-input" id="maleRadio" name="gender" value="1">
                    <label class="form-check-label" for="maleRadio">Male</label>
                </div>
                <div>
                    <input type="radio" class="form-check-input" id="femaleRadio" name="gender" value="0">
                    <label class="form-check-label" for="femaleRadio">Female</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputClass" class="form-label fw-bold text-uppercase">Class</label>
                <input type="text" class="form-control" id="exampleInputClass" name="class">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-uppercase">Department</label>
                <select class="form-select" name="department">
                    <option value="1">Công Nghệ Thông Tin</option>
                    <option value="2">Kế Toán</option>
                    <option value="3">Hệ Thống Thông Tin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <button type="reset" class="btn btn-outline-success ">Reset</button>
            <a href="/user" class="btn btn-outline-secondary">Cancel</a>
            {{csrf_field()}}
        </form>
    </div>
</body>

</html>