<h1>Create type</h1>

<form action="{{ route('type.store') }}" method="POST">

    Name:<input type="text" name="type_name"> </br>
    Type:<input type="text" name="type_short_name"> </br>
    Description:<input type="text" name="type_description"> </br>

    <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
    @csrf 

    <button type="submit">Add</button>

</form>