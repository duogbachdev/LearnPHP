<h1>{{$session("status")}}</h1>
<h1>DuogBachDev</h1>
<!-- Kiểm tra lỗi -->
@if($errors->any())
    @foreach($errors->all() as $error)
        {{$error}},
    @endforeach
@endif
<form action="" method="post">
    <input type="text" name="email" value="{{old('email')}}">
    <input type="text" name="password" value="{{old('password')}}">
    <button type="submit">Submit</button>
    <!-- Bảo mật dùng csrf -->
    @csrf  
</form>