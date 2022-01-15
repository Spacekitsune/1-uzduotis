<h1>Index  client</h1>

@if (count($clients)== 0)

<p>There are no clients</p>

@endif

<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Username</th>
    <th>Company_id</th>
    <th>Img_url</th>
    <th>Actions</th>
    </tr>

 <!--blade sintaksė -->
     @foreach ($clients as $client)

    <tr>
        <td>{{$client->id}}</td>
        <td>{{$client->name}}</td>
        <td>{{$client->surname}}</td>
        <td>{{$client->username}}</td>
        <td>{{$client->company_id}}</td>
        <td>{{$client->image_url}}</td>
        <td>
            <a href="{{route('clients.show', [$client])}}">show</a> 
            <a href="{{route('clients.edit', [$client])}}">Edit</a> 

            <form action="{{route('client.destroy', [$client])}}" method="POST">
                @csrf
                <button type="submit">Delete</button>
            </form>

            
        </td>
    </tr>


    @endforeach

</table> 