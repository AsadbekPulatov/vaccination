@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Ro'yxatga olish</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.vaccinations.store')}}" method="POST" accept-charset="UTF-8">
                        @csrf
                        <div class="form-group">
                            <label for="sick_id">Bemor</label>
                            {{--                            <input type="text" name="sick_id" class="form-control" id="sick_id" required>--}}
                            <select name="sick_id" id="sick_id" class="form-select form-control" required>
                                <option value="">Bemorni tanlang</option>
                                @foreach($bemorlar as $data)
                                    <option value="{{ $data->id }}">{{ $data->familya }} {{ $data->ismi }}(Otasi: {{ $data->otasining_ismi }})</option>
                                @endforeach
                            </select>
                        </div>

                        @if(\Illuminate\Support\Facades\Auth::id() == 1)
                            <div class="form-group">
                                <label for="employee_id">Xodim</label>
                                <select name="employee_id" id="employee_id" class="form-select form-control" required>
                                    <option value="">Xodimni tanlang</option>
                                    @foreach($xodimlar as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="info_id_age">Yosh</label>
                            <select name="info_id" id="info_id_age" class="form-select form-control">
                                <option value="">Yoshni tanlang</option>
                                @foreach($infos as $data)
                                    <option value="{{ $data->id }}">{{ $data->age }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="info_id">Emlash nomi</label>
                            <select name="info_id" id="info_id" class="form-select form-control">
                                <option value="">Emlashni tanlang</option>
                                @foreach($infos as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="blood">Qon bosimi</label>
                            <input type="text" name="blood" class="form-control" id="blood" required>
                        </div>

                        <div class="form-group">
                            <label for="temperature">Harorati</label>
                            <input type="text" name="temperature" class="form-control" id="temperature" required>
                        </div>

                        <div class="form-group">
                            <label for="status">Tashxis</label>
                            <select name="status" id="status" class="form-select form-control">
                                <option value="0">Salbiy</option>
                                <option value="1">Ijobiy</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="redate">Qayta topshirish sanasi</label>
                            <input type="date" name="redate" class="form-control" id="redate">
                        </div>
                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $('#status').on('change', function () {
            var value = $(this).val();
            if (value == 1)
                $('#redate').prop("disabled", true);
            else $('#redate').prop("disabled", false);
        });
        $('#info_id').on('change', function () {
            var value = $(this).val();
            $('#info_id_age').val(value);
        });
        $('#info_id_age').on('change', function () {
            var value = $(this).val();
            $('#info_id').val(value);
        });
    </script>
@endsection
