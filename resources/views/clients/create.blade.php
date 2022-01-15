<h1>Create client</h1>

<form action="{{ route('client.store') }}" method="POST">

    First Name:<input type="text" name="client_name"> </br>
    Last Name:<input type="text" name="client_surname"> </br>
    Username:<input type="text" name="client_username"> </br>
    Company ID:<input type="number" name="client_company_id"> </br>
    IMG: <input type="text" name="client_img_url"> </br>

    <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
    @csrf 

    <button type="submit">Add</button>

</form>