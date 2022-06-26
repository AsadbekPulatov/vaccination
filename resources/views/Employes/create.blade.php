@extends('Employes.layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('xodim') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Surname</label></br>
                <input type="text" name="surname" id="surname" class="form-control"></br>
                <label>Passport</label></br>
                <input type="text" name="passport" id="passport" class="form-control"></br>
                <label>Position</label></br>
                <input type="text" name="position" id="position" class="form-control"></br>
                <label>PhoneNumber</label></br>
                <input type="text" name="phonenumber" id="phonenumber" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
