<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PERPUSTAKAAN</title>
    <link rel="stylesheet" href="blabla">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
            

@if (session('error')
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error')
<div class="alert alert-error">
    {{ session('error') }}
</div>
@endif

<div class="card border-0 shadow rounded">
    <div class="card-body">
        <a herf="{{ route('post.create') }}" class="btn btn-md btn-success