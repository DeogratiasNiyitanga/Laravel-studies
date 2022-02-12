
    <div style="width: 60%;margin:auto;border:1px black solid;padding:10px;">
        <h1>Member list from database</h1><hr>
        <table border="1" style="width:100%;">
            <tr>
                <td>U_id</td>
                <td>First name</td>
                <td>Last name</td>
                <td>Email</td>
                <td>Phone number</td>
                <td><center><a href="#">ACTION</a></center></td>
            </tr>
            <?php $i=1;?>
            @foreach ($members as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item['fname']}}</td>
                    <td>{{$item['lname']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>{{$item['phone']}}</td>
                    <td><center><a href="edit?id={{$item['me_id']}}">Edit</a></center></td>

                </tr>
                <?php $i++?>
            @endforeach
            
        </table><br>
        <span>{{$members->links()}}</span><br>
 
  <a href="/contact"><button>Back to home</button></a>
        </div>
    <style>
        .w-5{
            width: 2em;height:2em;
        }
    </style>