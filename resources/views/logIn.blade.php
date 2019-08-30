@extends('mainLayout')
@yield('title' , "LOG IN")
@section('style')
    <style>
        body{
            font-family: 'Cairo', sans-serif;
            background-color: #e9ecef;
        }
        .container{
            width: 60%;

            background-color: white;
            margin-top: 7%;
            padding: 0;
            border-radius: 15px;
        }
        .header-container{
            background: url({{asset("images/brain-2062055.jpg")}}) no-repeat;
            background-size:  100% 100%;
            height: 120px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .header{
            background-color: rgba(0,0,100,.1);
            width: 100%;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 120px;
        }
        .logIn-form{
            padding: 50px;
        }
        .logIn-form label{
            margin-left: 20px;
        }
        input{
            border: none;
            border-bottom: 1px solid;
            width: 60%;
            font-size: 12px;
            padding: 10px;
        }
        button{
            border-radius: 15px;
            padding: 7px;
            width: 100px;
            margin-top: 30px;
            background-color: #2c4861;
            color: white;
            border: 1px;
        }

    </style>
@endsection
@section('container')
    <div class="container">
        <div class="header-container">
            <div class="header">

            </div>
        </div>
        <div class="text-center logIn-form">
            <form method="post" action="{{route("homePage")}}">
                @csrf
                <div class="form-group">
                    <label for="userName">اسم المستخدم</label>
                    <input type="text" name="user-name" id="userName" placeholder="أدخل اسم المستخدم">
                </div>
                <div class="form-group">
                    <label for="password">الرمز السري</label>
                    <input type="password" name="password" id="password" placeholder="أدخل الرمز السري " style="margin-right: 18px">
                </div>
                <button>
                    دخول
                </button>
            </form>
        </div>
    </div>
@endsection
@section('links')
    {{--bootstrap--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endsection
