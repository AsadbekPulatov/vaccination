@extends('Employes.layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('contact/' .$contacts->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
                <label>Surname</label></br>
                <input type="text" name="surname" id="surname" value="{{$users->surname}}" class="form-control"></br>
                <label>Pasport</label></br>
                <input type="text" name="pasport" id="pasport" value="{{$users->passport}}" class="form-control"></br>
                <label>Position</label></br>
                <input type="text" name="position" id="position" value="{{$users->position}}" class="form-control"></br>
                <label>PhoneNumber</label></br>
                <input type="text" name="phone number" id="phone number" value="{{$users->phonenumber}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$users->address}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
