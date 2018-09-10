<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{__('app.appname')}} - @yield('title')</title>

    <link href="{{asset("css/bootstrap.css")}}" rel="stylesheet" />
    <link href="{{asset("css/bootstrap-editable.css")}}" rel="stylesheet" />
    <link href="{{asset("css/site.css")}}" rel="stylesheet" />
    @if(App::isLocale('fa'))
        <link href="{{asset("css/bootstrap.rtl.css")}}" rel="stylesheet" />
    @endif
    <link href="{{asset("css/font-awesome.css")}}" rel="stylesheet" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>
<div class="container">
    <div class="content">
        @yield("content")
    </div>
</div>
<script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("js/jquery.validate.js")}}"></script>
<script src="{{asset("js/jquery.unobtrusive-ajax.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/bootstrap-editable.min.js")}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')
</body>
</html>