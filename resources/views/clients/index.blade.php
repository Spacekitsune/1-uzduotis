<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">

        <h1>Index client</h1>

        @if (count($clients)== 0)

        <p>There are no clients</p>

        @endif

        <a class="btn btn-primary mb-5" href="{{route('clients.create')}}">Create new client</a>

        <table class="table table-striped table-bordered">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Username</th>
                <th scope="col">Company id</th>
                <th scope="col">Img url</th>
                <th scope="col">Actions</th>
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
                <td class="d-flex">
                    <a class="d-inline p-2 btn btn-primary" href="{{route('clients.show', [$client])}}">Show</a>
                    <a class="d-inline p-2 btn btn-success" href="{{route('clients.edit', [$client])}}">Edit</a>

                    <form action="{{route('client.destroy', [$client])}}" method="POST" >
                        @csrf
                        <button class="d-inline p-2 btn btn-danger" type="submit">Delete</button>
                    </form>
                    

                </td>
            </tr>


            @endforeach

        </table>
    </div>

</body>

</html>