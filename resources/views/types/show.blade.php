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
    <h1>Show type</h1>



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

    <div class="container">

        @if (count($type->typeCompanies)==0)
        <p>The are no companies</p>
        @else
        <table class="table table-stiped">
        <tr>
            <th>Company ID</th>
            <th>Company Name</th>
            <th>Company description</th>
            <th>Actions</th>
        </tr>

        @foreach ($type->typeCompanies as $company)
        <tr>
            <td>{{$company->id}}</td>
            <td>{{$company->name}}</td>
            <td>{{$company->description}}</td>
            <td>
                <form action="{{route('company.destroy', [$company])}}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
        
        @endforeach
        </table>

        @endif

        <form action="{{route('type.destroy', [$type])}}" method="POST">
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
</body>

</html>