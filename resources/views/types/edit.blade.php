<h1>Edit  type</h1>

<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Short name</th>
    <th>Description</th>
    
    </tr>


    <tr>
        <td>{{$type->id}}</td>
        <td>{{$type->name}}</td>
        <td>{{$type->short_name}}</td>
        <td>{{$type->description}}</td>
        
    </tr>


</table> 

</br>
</br>

<form action="{{ route('type.update', [$type]) }}" method="POST">

    Name:<input type="text" name="type_name" value="{{$type->name}}"> </br>
    Type:<input type="text" name="type_short_name" value="{{$type->short_name}}"> </br>
    Description:<input type="text" name="type_description" value="{{$type->description}}"> </br>
    

    <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
    @csrf 

    <button type="submit">Edit</button>

</form>