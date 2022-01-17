<h1>Create company</h1>

<form action="{{ route('company.store') }}" method="POST">

    Name:<input type="text" name="company_name"> </br>
    Type:<input type="text" name="company_type"> </br>
    Description:<input type="text" name="company_description"> </br>

    <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
    @csrf 

    <button type="submit">Add</button>

</form>