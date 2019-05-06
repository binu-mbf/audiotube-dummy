<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Log in | Audiotube admin</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/admincss/b-admin-custom-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admincss/base.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admincss/changelists.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admincss/forms.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admincss/widgets.css') }}">

    <style>
        .submit-row {
        background: #FFF !important;
        border: 0px solid #CCC;
            }
    </style>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/admincss/login.css') }}">        <!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="/static/admin/css/ie.css" /><![endif]-->
    <script type="text/javascript">window.__admin_media_prefix__ = {{ asset('/static/admin/') }} ;</script>
    <meta name="robots" content="NONE,NOARCHIVE">
    
    <style type="text/css">
    .historylink{
        display: none !important;
    }
    </style>
</head>
<body class="login" data-gr-c-s-loaded="true">

@yield('content')
    
</body>
</html>


{{-- {{asset(' ') }} --}}