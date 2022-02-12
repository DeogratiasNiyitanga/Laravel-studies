
    <div style="width: 50%;margin:auto;border:1px black solid;padding:10px;">
        <h1>File upload</h1><hr>
 
    <form action="fileUpload" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Choose file to upload</label><br>
            <input type="file" name="file" placeholder="No file choosen">
        </div><br>
   
        <button type="submit">Submit</button> 
    </form><a href="/contact"><button>Back to home</button></a>
        </div>
    