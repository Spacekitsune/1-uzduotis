<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

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
<h1>Create client</h1>

<form action="{{ route('client.store') }}" method="POST">

    First Name:<input type="text" name="client_name"> </br>
    Last Name:<input type="text" name="client_surname"> </br>
    Username:<input type="text" name="client_username"> </br>
    Company ID: 
    <select name="client_company_id" class="form-control form-select">        
        @foreach ($select_values as $company)
            <option value="{{$company->id}}"> {{$company->name}}</option>
        
        @endforeach       
    </select></br>
    IMG: <input type="text" name="client_img_url"> </br>

    <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
    @csrf 

    <button type="submit">Add</button>

</form>
</body>
</html>