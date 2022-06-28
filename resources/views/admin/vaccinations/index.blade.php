@extends('admin.master')

@section('content')
    <style>

    </style>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8"><h1 class="card-title">Emlanganlar ro'yxati</h1></div>
                    <div class="col-md-4">
                        <a class="btn btn-primary" href="{{route('admin.vaccinations.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Qo'shish
                        </a>
                        <a class="btn btn-primary" href="{{route('admin.download', ['id' => $id])}}">
                            <span class="btn-label">
                                <i class="fa fa-eye"></i>
                            </span>
                            Ko'rish
                        </a>
                    </div>

                </div>
                <hr>
                <div class="card-body">
                    <table class="table-responsive-md table-bordered table-hover text-center">
                        <thead>
                        <tr>
                            <th scope="col" class="col-1 col-md-1">#</th>
                            <th scope="col" class="col-2 col-md-2">Bemor</th>
                            <th scope="col" class="col-2 col-md-2">Xodim</th>
                            <th scope="col" class="col-1 col-md-1">Emlash nomi</th>
                            <th scope="col" class="col-1 col-md-1">Emlash sanasi</th>
                            <th scope="col" class="col-1 col-md-1">Qon bosimi</th>
                            <th scope="col" class="col-1 col-md-1">Harorati</th>
                            <th scope="col" class="col-1 col-md-1">Tashxis</th>
                            <th scope="col" class="col-1 col-md-1">Qayta topshirish</th>
                            <th scope="col" class="col-1 col-md-1">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vaccinations as $key => $data)
                            <tr>
                                <td class="col-1">{{$key+1}}</td>
                                <td>
                                    @if(isset($data->bemor->ismi))
                                        <a href="{{ route('admin.vaccinations.index',['id' => $data['bemor']['id']]) }}" class="nav-link">
                                            {{$data->bemor->familya}}  {{ $data->bemor->ismi }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if(isset($data->xodim->name))
                                        {{$data->xodim->name}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($data->info->name))
                                        {{$data->info->name}}
                                    @endif
                                </td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->blood}}</td>
                                <td>{{$data->temperature}}</td>
                                <td>
                                    @if($data['status'] == 1)
                                        <p class="text-success">Ijobiy</p>
                                    @else
                                        <p class="text-danger">Salbiy</p>
                                    @endif
                                </td>
                                <td>{{$data->redate}}</td>
                                <td class="col-2">
                                    <form action="{{ route('admin.vaccinations.destroy',$data->id) }}" method="POST">
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
