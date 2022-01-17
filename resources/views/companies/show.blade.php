<h1>Show  company</h1>

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

<form action="{{route('company.destroy', [$company])}}" method="POST">
                @csrf
                <button type="submit">Delete</button>
            </form>