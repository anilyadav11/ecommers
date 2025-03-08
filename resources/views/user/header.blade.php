@php
$settings = \App\Models\setting::first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$settings->title}}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- OWL Car -->
    <link rel="stylesheet" href="{{asset('newAdmin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('newAdmin/css/owl.theme.default.min.css')}}">
    <!-- Showmore css -->
    <link rel="stylesheet" href="{{asset('newAdmin/css/showMoreItems-theme.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('newAdmin/css/bootstrap.min.css')}}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('newAdmin/css/style.css')}}">
</head>

<body>