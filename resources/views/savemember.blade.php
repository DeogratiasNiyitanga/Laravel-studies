
    <div style="width: 50%;margin:auto;border:1px black solid;padding:10px;">
        <h1>Add new member to database</h1>        
    <br>
    <form action="savedatatodb" method="POST">
        @csrf
        <div>
            <label for="">First name</label><br>
            <input type="text" name="fname" placeholder="Enter First name">
        </div><br>
    
        <div>
            <label for="">Last name</label><br>
            <input type="text" name="lname" placeholder="Enter last name">
        </div><br>
    
        <div>
            <label for="">Email</label><br>
            <input type="email" name="email" placeholder="Enter email">
        </div><br>
        <div>
            <label for="">Phone number</label><br>
            <input type="number" name="phone" placeholder="Enter Phone number">
        </div><br>
        <br>
        <button type="submit">Submit</button> 
    </form><a href="/contact"><button>Back to home</button></a>
        </div>
    