<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Emlanganlar ro'yxati</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" href="{{asset('/asset/img/icon.ico')}}" type="image/x-icon"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script src="{{asset('/asset/js/core/jquery.3.2.1.min.js')}}"></script>
    <!-- Fonts and icons -->
    <script src="{{asset('/asset/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {"families": ["Lato:300,400,700,900"]},
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['{{asset("/asset/css/fonts.min.css")}}']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('/asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/asset/css/atlantis.min.css')}}">

    @yield('link')
</head>
<body>
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Emlanganlar ro'yxati</h1></div>
                    <div class="col-md-1">
                        <button class="btn btn-primary" id="download" onclick="download()">
                            <span class="btn-label">
                                <i class="fa fa-download"></i>
                            </span>
                                Yuklash
                        </button>
                    </div>

                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col" class="col-1">#</th>
                            <th scope="col" class="col-2">Bemor</th>
                            <th scope="col" class="col-2">Xodim</th>
                            <th scope="col" class="col-1">Emlash nomi</th>
                            <th scope="col" class="col-1">Emlash sanasi</th>
                            <th scope="col" class="col-1">Qon bosimi</th>
                            <th scope="col" class="col-1">Harorati</th>
                            <th scope="col" class="col-1">Tashxis</th>
                            <th scope="col" class="col-1">Qayta topshirish</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vaccinations as $key => $data)
                            <tr>
                                <td class="col-1">{{$key+1}}</td>
                                <td>
                                    @if(isset($data->bemor->ismi))
                                        {{$data->bemor->familya}}  {{ $data->bemor->ismi }}
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
                                        <p>Ijobiy</p>
                                    @else
                                        <p>Salbiy</p>
                                    @endif
                                </td>
                                <td>{{$data->redate}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>
    function download(){
        $('#download').hide();
        window.print();
    }
</script>

<script src="{{asset('/asset/js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('/asset/js/core/popper.min.js')}}"></script>
<script src="{{asset('/asset/js/core/bootstrap.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('/asset/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('/asset/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('/asset/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


<!-- Chart JS -->
<script src="{{asset('/asset/js/plugin/chart.js/chart.min.js')}}"></script>

<!-- jQuery Sparkline -->
<script src="{{asset('/asset/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Chart Circle -->
<script src="{{asset('/asset/js/plugin/chart-circle/circles.min.js')}}"></script>

<!-- Datatables -->
<script src="{{asset('/asset/js/plugin/datatables/datatables.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{asset('/asset/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- jQuery Vector Maps -->
<script src="{{asset('/asset/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/asset/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{asset('/asset/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Atlantis JS -->
<script src="{{asset('/asset/js/atlantis.min.js')}}"></script>
</body>
</html>
