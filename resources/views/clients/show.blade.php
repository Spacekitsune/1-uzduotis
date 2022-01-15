<h1>Show  client</h1>

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

<form action="{{route('client.destroy', [$client])}}" method="POST">
                @csrf
                <button type="submit">Delete</button>
            </form>