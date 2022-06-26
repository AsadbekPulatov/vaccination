@extends('bemor.master')

@section('onion')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
                    </li>

                </ul>
            </div>
        </div>
        <a href="{{ route('bemor.create') }}" class="btn btn-primary">Yangi Bemor</a>
    </nav><br><br>
    <div class="content">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Familya</th>
                <th scope="col">Ism</th>
                <th scope="col">Sharifi</th>
                <th scope="col">Tug'ilgan sana</th>
                <th scope="col">Millati</th>
                <th scope="col">Tug'ilgan joyi</th>
                <th scope="col">Guvohnoma</th>
                <th scope="col">Yosh</th>
                <th scope="col">Manzil</th>
                <th scope="col">Onasi</th>
                <th scope="col">Telefon</th>
                <th scope="col">Kim olib keldi</th>
                <th>Amallar</th>
            </tr>
            </thead>
            <tbody>
        @foreach($bemors as $key => $value)
                        <tr>
                            <td class="col-1">{{$key+1}}</td>
                            <td>{{$value->familya}}</td>
                            <td>{{$value->ismi}}</td>
                            <td>{{$value->otasining_ismi}}</td>
                            <td>{{$value->tugilgan_sana}}</td>
                            <td>{{$value->millati}}</td>
                            <td>{{$value->tugilgan_joyi}}</td>
                            <td>{{$value->guvohnoma_raqami}}</td>
                            <td>{{$value->yosh}}</td>
                            <td>{{$value->manzili}}</td>
                            <td>{{$value->onasini_ismi}}</td>
                            <td>{{$value->tel_number}}</td>
                            <td>{{$value->kim_olib_keldi}}</td>
                            <td class="col-2">
                                <form action="{{ route('bemor.destroy',$value->id) }}" method="POST">
                                <a class="btn btn-warning btn-sm" href="{{ route('bemor.edit',$value->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
            </tbody>
        </table>
    </div>
@endsection
