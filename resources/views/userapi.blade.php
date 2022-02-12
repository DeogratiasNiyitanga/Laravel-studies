<center>

    <hr>
    <h2>Gotten users from api</h2>
    <table border="1" style="width: 50%;margin:auto;">
        <tr><td>ID</td>
        <td>First name</td>
        <td>Last name</td>
    <td>Email</td>
    <td>User frofile photo</td></tr>
    
    @foreach ($collection as $item)
    <tr><td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['last_name']}}</td>
    <td>{{$item['email']}}</td>
    <td><img src="{{$item['avatar']}}" alt="" width="30"></td></tr>
    @endforeach
    </table>
    
<br><br><a href="/contact"><button>Back to home</button></a>
    
</center>
