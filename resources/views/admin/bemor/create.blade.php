@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Bemor yaratish</h1></div>
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


                    <form action="{{route('admin.bemor.store')}}" method="POST" accept-charset="UTF-8">
                        @csrf
                        <div class="form-group">
                            <label for="familya">Familya</label>
                            <input type="text" name="familya" class="form-control" id="familya" placeholder="Familya" required>
                        </div>
                        <div class="form-group">
                            <label for="ismi">Ism</label>
                            <input type="text" name="ismi" class="form-control" id="ismi" placeholder="Ism" required>
                        </div>
                        <div class="form-group">
                            <label for="otasining_ismi">Otasining ismi</label>
                            <input type="text" name="otasining_ismi" class="form-control" id="otasining_ismi"
                                   placeholder="Otasining ismi" required>
                        </div>
                        <div class="form-group">
                            <label for="onasini_ismi">Onasining Ismi</label>
                            <input type="text" name="onasini_ismi" class="form-control" id="onasini_ismi"
                                   placeholder="Onasining ismi" required>
                        </div>
                        <div class="form-group">
                            <label for="tugilgan_sana">Tug'ilgan sana</label>
                            <input type="date" name="tugilgan_sana" class="form-control" id="tugilgan_sana"
                                   placeholder="Tug'ilgan sana" required>
                        </div>
                        <div class="form-group">
                            <label for="millati">Millati</label>
                            <input type="text" name="millati" class="form-control" id="millati" placeholder="Millati" required>
                        </div>
                        <div class="form-group">
                            <label for="tugilgan_joyi">Tug'ilgan joy</label>
                            <input type="text" name="tugilgan_joyi" class="form-control" id="tugilgan_joyi"
                                   placeholder="Tug'ilgan joy" required>
                        </div>
                        <div class="form-group">
                            <label for="guvohnoma_raqami">Guvohnoma raqam</label>
                            <input type="text" name="guvohnoma_raqami" class="form-control" id="guvohnoma_raqami"
                                   placeholder="Guvohnoma raqam" required>
                        </div>
                        <div class="form-group">
                            <label for="yosh">Yosh</label>
                            <input type="text" name="yosh" class="form-control" id="yosh" placeholder="Yosh" required>
                        </div>
                        <div class="form-group">
                            <label for="manzil">Manzil</label>
                            <input type="text" name="manzil" class="form-control" id="manzil" placeholder="Manzil" required>
                        </div>
                        <div class="form-group">
                            <label for="tel_number">Telefon nomer</label>
                            <input type="text" name="tel_number" class="form-control" id="tel_number"
                                   placeholder="Telefon nomer" required>
                        </div>
                        <div class="form-group">
                            <label for="kim_olib_keldi">Kim olib keldi</label>
                            <input type="text" name="kim_olib_keldi" class="form-control" id="kim_olib_keldi"
                                   placeholder="Kim olib keldi" required>
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

{{--@extends('admin.master')--}}
{{--@section('content')--}}
{{--    <div class="col-md-12">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-10"><h1 class="card-title">Patient</h1></div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div class="card-body">--}}

{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}


{{--                    <form action="{{route('bemor.store')}}" method="POST" accept-charset="UTF-8"--}}
{{--                          enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Familya</label>--}}
{{--                            <input type="text" name="familya" class="form-control" id="header_ru" placeholder="Familya">--}}
{{--                        </div>     <div class="form-group">--}}
{{--                            <label for="header_ru">Ism</label>--}}
{{--                            <input type="text" name="ismi" class="form-control" id="header_ru" placeholder="Ism">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Otasining ismi</label>--}}
{{--                            <input type="text" name="otasining_ismi" class="form-control" id="header_ru" placeholder="Otasining ismi">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Tug'ilgan sana</label>--}}
{{--                            <input type="date" name="tugilgan_sana" class="form-control" id="header_ru" placeholder="Tug'ilgan sana">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Millati</label>--}}
{{--                            <input type="text" name="millati" class="form-control" id="header_ru" placeholder="Millati">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Tug'ilgan joy</label>--}}
{{--                            <input type="text" name="tugilgan_joyi" class="form-control" id="header_ru" placeholder="Tug'ilgan joy">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Guvohnoma raqam</label>--}}
{{--                            <input type="text" name="guvohnoma_raqami" class="form-control" id="header_ru" placeholder="Guvohnoma raqam">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Yosh</label>--}}
{{--                            <input type="text" name="yosh" class="form-control" id="header_ru" placeholder="Yosh">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Manzil</label>--}}
{{--                            <input type="text" name="manzil" class="form-control" id="header_ru" placeholder="Manzil">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Onasining Ismi</label>--}}
{{--                            <input type="text" name="onasini_ismi" class="form-control" id="header_ru" placeholder="Onasining ismi">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Telefon nomer</label>--}}
{{--                            <input type="text" name="tel_number" class="form-control" id="header_ru" placeholder="Telefon nomer">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">Kim olib keldi</label>--}}
{{--                            <input type="text" name="kim_olib_keldi" class="form-control" id="header_ru" placeholder="Kim olib keldi">--}}
{{--                        </div>--}}

{{--                            <button type="submit" id="alert" class="btn btn-primary">Yuborish</button>--}}
{{--                        <input type="reset" class="btn btn-danger" value="Tozalash">--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--@endsection--}}







