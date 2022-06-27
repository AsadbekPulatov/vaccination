@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Bemorlar ro'yxati</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.bemor.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col" class="col-1">#</th>
                            <th scope="col" class="col-1">Familya</th>
                            <th scope="col" class="col-1">Ism</th>
                            <th scope="col" class="col-1">Otasi</th>
                            {{--                            <th scope="col">Onasi</th>--}}
                            <th scope="col" class="col-1">Tug'ilgan sana</th>
                            {{--                            <th scope="col">Millati</th>--}}
                            {{--                            <th scope="col">Tug'ilgan joyi</th>--}}
                            {{--                            <th scope="col">Guvohnoma</th>--}}
                            {{--                            <th scope="col">Yosh</th>--}}
                            {{--                            <th scope="col">Manzil</th>--}}
                            <th scope="col" class="col-1">Telefon</th>
                            <th scope="col" class="col-1">Kim olib keldi</th>
                            <th scope="col" class="col-2">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bemors as $key => $value)
                            <tr>
                                <td class="col-1">{{$key+1}}</td>
                                <td>{{$value->familya}}</td>
                                <td>{{$value->ismi}}</td>
                                <td>{{$value->otasining_ismi}}</td>
                                {{--                                <td>{{$value->onasini_ismi}}</td>--}}
                                <td>{{$value->tugilgan_sana}}</td>
                                {{--                                <td>{{$value->millati}}</td>--}}
                                {{--                                <td>{{$value->tugilgan_joyi}}</td>--}}
                                {{--                                <td>{{$value->guvohnoma_raqami}}</td>--}}
                                {{--                                <td>{{$value->yosh}}</td>--}}
                                {{--                                <td>{{$value->manzili}}</td>--}}
                                <td>{{$value->tel_number}}</td>
                                <td>{{$value->kim_olib_keldi}}</td>
                                <td class="col-2">
                                    <form action="{{ route('admin.bemor.destroy',$value->id) }}" method="POST">
                                        <a class="btn btn-info btn-sm"
                                           href="{{ route('admin.bemor.show',$value->id) }}">
                                                                    <span class="btn-label">
                                                                        <i class="fa fa-eye"></i>
                                                                    </span>

                                        </a>
                                        <a class="btn btn-warning btn-sm"
                                           href="{{ route('admin.bemor.edit',$value->id) }}">
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
            </div>
        </div>
    </div>

@endsection
