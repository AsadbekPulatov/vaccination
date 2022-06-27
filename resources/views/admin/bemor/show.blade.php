@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Bemorlar ro'yxati</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.bemor.index')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Bemorlar ro'yxati
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Familya</th>
                            <td>{{ $bemor['familya'] }}</td>
                        </tr>
                        <tr>
                            <th>Ism</th>
                            <td>{{ $bemor['ismi'] }}</td>
                        </tr>
                        <tr>
                            <th>Otasi</th>
                            <td>{{ $bemor['otasining_ismi'] }}</td>
                        </tr>
                        <tr>
                            <th>Onasi</th>
                            <td>{{ $bemor['onasini_ismi'] }}</td>
                        </tr>
                        <tr>
                            <th>Tug'ilgan sana</th>
                            <td>{{ $bemor['tugilgan_sana'] }}</td>
                        </tr>
                        <tr>
                            <th>Millati</th>
                            <td>{{ $bemor['millati'] }}</td>
                        </tr>
                        <tr>
                            <th>Tug'ilgan joyi</th>
                            <td>{{ $bemor['tugilgan_joyi'] }}</td>
                        </tr>
                        <tr>
                            <th>Guvohnoma</th>
                            <td>{{ $bemor['guvohnoma_raqami'] }}</td>
                        </tr>
                        <tr>
                            <th>Yosh</th>
                            <td>{{ $bemor['yosh'] }}</td>
                        </tr>
                        <tr>
                            <th>Manzil</th>
                            <td>{{ $bemor['manzili'] }}</td>
                        </tr>
                        <tr>
                            <th>Telefon</th>
                            <td>{{ $bemor['tel_number'] }}</td>
                        </tr>
                        <tr>
                            <th>Kim olib keldi</th>
                            <td>{{ $bemor['kim_olib_keldi'] }}</td>
                        </tr>
                </div>
            </div>
        </div>
    </div>

@endsection
