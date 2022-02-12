
    <div style="width: 50%;margin:auto;border:1px black solid;padding:10px;">
    <h1>Register new user</h1>
    @if (session('userCred'))
    <div style="color: black;background-color:lightblue;padding:10px;">
       User {{session('userCred')}} has added succesfully.
    </div>        
    @endif
<br>
<form action="memberRegist" method="POST">
    @csrf
    <div>
        <label for="">User name</label><br>
        <input type="text" name="username" placeholder="Enter user name">
    </div><br>

    <div>
        <label for="">Email</label><br>
        <input type="text" name="email" placeholder="Enter email">
    </div><br>

    <div>
        <label for="">Password</label><br>
        <input type="password" name="password" placeholder="Enter password">
    </div><br>
    <br>
    <button type="submit">Submit</button> 
</form><a href="/contact"><button>Back to home</button></a>
    </div>
