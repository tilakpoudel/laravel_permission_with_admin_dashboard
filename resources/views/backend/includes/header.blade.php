<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'login') }}</title>

  <!-- Fonts -->
  <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet">



  <!-- for template -->
  <!-- Custom fonts for this template-->
  <link href="{{asset('sb2_admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> --}}

  <!-- Custom styles for this template-->
  <link href="{{asset('sb2_admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{asset('sb2_admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
</head>