<h1>Login Form</h1>
<form action="userLogin" method="POST">
    {{-- @if($errors->any())
    @foreach($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
    @endif --}}
    @csrf
    <input type="text" name="username" placeholder="Enter username"><br>
    <span style="color: red;">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="password" name="password" placeholder="Enter password"><br>
    <span style="color: red;">@error('password'){{$message}}@enderror</span>
    <br>
<button type="submit">Login</button>
</form>