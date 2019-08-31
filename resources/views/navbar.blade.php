@extends('mainStructure')

@section('style')
    @parent
    <style>

        .nav-items li{
            list-style: none;
            color: white;
        }
        .nav-items li a{
            text-decoration: none;
            color: white;
        }
        .nav-items li a:hover{
            color: #d6e9f8;
        }
        .sn{
            float: left;
            margin-top: -20px;
        }
        .logo{
            margin-top: 10px;
            font-size: 18px;
        }
        .navbar-inverse{
            background-color: #2c4861;
            border: none;
            margin-bottom: 100px;
        }

    </style>
@endsection
@section('navbar')
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav-items">
                <li class="logo">مقياس هيرمان</li>
                <li class="sn"><a href="">تغيير الرقم السري</a></li>
            </ul>
        </div>
    </nav>
@show




