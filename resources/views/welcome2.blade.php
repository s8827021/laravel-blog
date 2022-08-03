{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

{{--    <title>Laravel</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}


{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>DataTable</title>--}}
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--        <script type="text/javascript" charset="utf8"--}}
{{--                src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>--}}
{{--</head>--}}

{{--<body>--}}

{{--<div id="app">--}}
@extends('layouts.app')

@section('content')
<div id="app">
    <vue-dropdown></vue-dropdown>
    <Upload-datatable></Upload-datatable>
</div>
@endsection
{{--    @endsection--}}
{{--</div>--}}
{{----}}
{{--<script src="/js/app.js"></script>--}}

{{--</body>--}}
{{--</html>--}}

