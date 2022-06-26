@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Emlash turlari</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.vaccination_infos.create')}}">
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
                            <th scope="col">#</th>
                            <th scope="col">Yoshi</th>
                            <th scope="col">Emlash turi</th>
                            <th scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vaccination_infos as $key => $data)
                        <tr>
                            <td class="col-1">{{$key+1}}</td>
                            <td>{{$data->age}}</td>
                            <td>{{$data->name}}</td>
                            <td class="col-2">
                                <form action="{{ route('admin.vaccination_infos.destroy',$data->id) }}" method="POST">
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.vaccination_infos.edit',$data->id) }}">
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
