<h1>Edit  client</h1>

<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Username</th>
    <th>Company_id</th>
    <th>Img_url</th>
    </tr>


    <tr>
        <td>{{$client->id}}</td>
        <td>{{$client->name}}</td>
        <td>{{$client->surname}}</td>
        <td>{{$client->username}}</td>
        <td>{{$client->company_id}}</td>
        <td>{{$client->image_url}}</td>
    </tr>


</table> 

</br>
</br>

<form action="{{ route('client.update', [$client]) }}" method="POST">

    First Name:<input type="text" name="client_name" value="{{$client->name}}"> </br>
    Last Name:<input type="text" name="client_surname" value="{{$client->surname}}"> </br>
    Username:<input type="text" name="client_username" value="{{$client->username}}"> </br>
    Company ID:
    <select name="client_company_id" class="form-control form-select">        
        @foreach ($select_values as $company)
            @if ($company->id == $client->company_id)
                <option value="{{$company->id}}" selected>{{$company->name}}</option>
            @else
            <option value="{{$company->id}}"> {{$company->name}} </option>
            @endif
        @endforeach       
    </select></br>
    IMG: <input type="text" name="client_img_url" value="{{$client->image_url}}"> </br>

    <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
    @csrf 

    <button type="submit">Edit</button>

</form>