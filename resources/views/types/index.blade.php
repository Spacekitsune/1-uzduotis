<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Companies</title>

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

        <h1>Index types</h1>

        @if (session()->has('error_message'))
        <div class="alert alert-danger">Delete is not possible while type has companies.</div>
        @endif

        @if (session()->has('success_message'))
        <div class="alert alert-success">Type was deleted.</div>
        @endif

        @if (count($types)== 0)

        <p>There are no companies</p>

        @endif

        <a class="btn btn-primary" href="{{route('types.create')}}">Create new Company</a>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Short Name</th>
                <th>Description</th>
                <th>Companies</th>
                <th>Action</th>
            </tr>

            <!--blade sintaksė -->
            @foreach ($types as $type)

            <tr>
                <td>{{$type->id}}</td>
                <td>{{$type->name}}</td>
                <td>{{$type->short_name}}</td>
                <td>{{$type->description}}</td>
                <td>{{count($type->typeCompanies)}}</td>

                <td>
                    <a class="btn btn-primary" href="{{route('types.show', [$type])}}">Show</a>
                    <a class="btn btn-success" href="{{route('types.edit', [$type])}}">Edit</a>

                    <form action="{{route('type.destroy', [$type])}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>


                </td>
            </tr>


            @endforeach

        </table>
    </div>

</body>

</html>