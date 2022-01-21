<h1>Create company</h1>

<form action="{{ route('company.store') }}" method="POST">

    Name:<input type="text" name="company_name"> </br>
    type: <select name="company_type_id" class="form-control form-select">        
        @foreach ($select_values as $type)
            <option value="{{$type->id}}"> {{$type->name}} </option>
        
        @endforeach       
    </select></br>
    Description:<input type="text" name="company_description"> </br>

    <!-- apsauga nuo formos patvirtinimo už puslapio ribų -->
    @csrf 

    <button type="submit">Add</button>

</form>