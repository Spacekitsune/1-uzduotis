<h1>Edit  company</h1>

<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Type</th>
    <th>Description</th>
    
    </tr>


    <tr>
        <td>{{$company->id}}</td>
        <td>{{$company->name}}</td>
        <td>{{$company->type}}</td>
        <td>{{$company->description}}</td>
        
    </tr>


</table> 

</br>
</br>

<form action="{{ route('company.update', [$company]) }}" method="POST">

    Name:<input type="text" name="company_name" value="{{$company->name}}"> </br>
    Type:<input type="text" name="company_type" value="{{$company->type}}"> </br>
    Description:<input type="text" name="company_description" value="{{$company->description}}"> </br>
    

    <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
    @csrf 

    <button type="submit">Edit</button>

</form>