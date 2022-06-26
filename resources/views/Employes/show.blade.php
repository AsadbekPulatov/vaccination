@extends('Employes.layout')
@section('content')


    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $users->name }}</h5>
                <p class="card-text">Surname : {{ $users->surname }}</p>
                <p class="card-text">Passport : {{ $users->passport }}</p>
                <p class="card-text">Position : {{ $users->position }}</p>
                <p class="card-text">PhoneNumber : {{ $users->phonenumber }}</p>
                <p class="card-text">Address : {{ $users->address }}</p>
            </div>

            </hr>

        </div>
    </div>
