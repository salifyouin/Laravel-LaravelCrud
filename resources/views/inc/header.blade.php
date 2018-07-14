<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel crud application</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/mystyle.css')}}">
    <script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/create')}}">Create</a></li>
        </ul>
    </div>
</div>