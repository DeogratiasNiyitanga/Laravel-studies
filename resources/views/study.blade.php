
    <fieldset style="width: 50%;margin:auto;" >
        <legend>
             <h2>This is section for study</h2>
        </legend> <hr>
        {{-- <div>
            @foreach ($users as $item)
               <h5> {{$item}} </h5>
            @endforeach
        </div><hr> --}}
        @include('login')
      <br>
      <a href="/contact"><button>Back to home</button></a> 
</fieldset>

{{-- @csrf
<script>
    const data = @json($users);
    console.log(data);
</script> --}}
