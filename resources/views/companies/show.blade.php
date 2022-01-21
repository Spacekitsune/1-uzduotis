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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <h1>Show company</h1>



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
            <td>{{$company->typeCompany->name}}</td>
            <td>{{$company->description}}</td>

        </tr>


    </table>

    <div class="container">
        <div class="row">

            @if (count($company->companyClients)==0)
            <p>The are no clients</p>
            @else
            <!-- <table class="table table-stiped">
        <tr>
            <th>Client ID</th>
            <th>Client Name</th>
            <th>Client Surname</th>
            <th>Actions</th>
        </tr> -->

            @foreach ($company->companyClients as $client)
            <!-- <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->surname}}</td>
            <td>
                <form action="{{route('client.destroy', [$client])}}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr> -->
            <div class="col-sm card" style="width: 12rem;">
                <img class="card-img-top" src="{{$client->image_url}}" alt="Card image cap" width="200px">
                <div class="card-body">
                    <h3 class="card-title">{{$client->name}} {{$client->surname}}</h5>
                        <p class="card-text">ID: {{$client->id}}</p>
                        <form action="{{route('client.destroy', [$client])}}" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                </div>
            </div>
            @endforeach
            <!-- </table> -->

            @endif

            <form action="{{route('company.destroy', [$company])}}" method="POST">
                @csrf
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
</body>

</html>