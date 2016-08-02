@extends('xCV.template')
<title>Xin lỗi, chúng tôi không tìm thấy trang</title>
@section('content')

    <style>
        *, *:after, *:before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box; }

        .error-page-wrap {
            width: 250px;
            height: 250px;
            margin: 95px auto 40px auto; }
        .error-page-wrap:before {
            box-shadow: 0 0 200px 150px #fff;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            position: relative;
            z-index: -1;
            content: '';
            display: block; }

        .error-page {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            top: -310px;
            position: relative;
            text-align: center;
            background: #d36242;
            background: -moz-linear-gradient(top, #d36242 0%, darkred 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #d36242), color-stop(100%, darkred));
            background: -webkit-linear-gradient(top, #d36242 0%, darkred 100%);
            background: -o-linear-gradient(top, #d36242 0%, darkred 100%);
            background: -ms-linear-gradient(top, #d36242 0%, darkred 100%);
            background: linear-gradient(to bottom, #d36242 0%, darkred 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$firstColor', endColorstr='$secondColor',GradientType=0 ); }
        .error-page:before {
            width: 63px;
            height: 63px;
            border-radius: 50%;
            box-shadow: 3px 25px 0 5px #C95439;
            content: '';
            z-index: -1;
            display: block;
            position: relative;
            top: -19px;
            left: 5px; }
        .error-page:after {
            width: 250px;
            height: 17px;
            margin: 0 auto;
            top: 25px;
            content: '';
            z-index: -1;
            display: block;
            position: relative;
            background: -moz-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.65) 0%, rgba(35, 26, 26, 0) 59%, rgba(60, 44, 44, 0) 100%);
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(0, 0, 0, 0.65)), color-stop(59%, rgba(35, 26, 26, 0)), color-stop(100%, rgba(60, 44, 44, 0)));
            background: -webkit-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.65) 0%, rgba(35, 26, 26, 0) 59%, rgba(60, 44, 44, 0) 100%);
            background: -o-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.65) 0%, rgba(35, 26, 26, 0) 59%, rgba(60, 44, 44, 0) 100%);
            background: -ms-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.65) 0%, rgba(35, 26, 26, 0) 59%, rgba(60, 44, 44, 0) 100%);
            background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.65) 0%, rgba(35, 26, 26, 0) 59%, rgba(60, 44, 44, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a6000000', endColorstr='#003c2c2c',GradientType=1 ); }
        .error-page h1 {
            color: rgba(255, 255, 255, 0.94);
            font-size: 100px;
            margin: 0 auto;
            text-shadow: 0px 0 7px rgba(0, 0, 0, 0.5); }
        .error-page h1:before {
            width: 260px;
            height: 1px;
            position: relative;
            margin: 0 auto;
            top: 70px;
            content: '';
            display: block;
            background: -moz-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(111, 25, 25, 0.65)), color-stop(70%, rgba(75, 38, 38, 0)), color-stop(100%, rgba(60, 44, 44, 0)));
            background: -webkit-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
            background: -o-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
            background: -ms-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
            background: radial-gradient(ellipse at center, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a66f1919', endColorstr='#003c2c2c',GradientType=1 ); }
        .error-page h1:after {
            width: 260px;
            height: 1px;
            content: '';
            display: block;
            opacity: 0.2;
            margin: 0 auto;
            top: 50px;
            position: relative;
            background: -moz-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(247, 173, 148, 0.65)), color-stop(99%, rgba(255, 255, 255, 0.01)), color-stop(100%, rgba(255, 255, 255, 0)));
            background: -webkit-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
            background: -o-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
            background: -ms-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
            background: radial-gradient(ellipse at center, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a6f7ad94', endColorstr='#00ffffff',GradientType=1 ); }
        .error-page h2 {
            margin: 55px 0 30px 0;
            font-size: 17px; }
        .error-page h2:before {
            width: 130px;
            height: 1px;
            position: relative;
            margin: 0 auto;
            top: 31px;
            content: '';
            display: block;
            background: -moz-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(111, 25, 25, 0.65)), color-stop(70%, rgba(75, 38, 38, 0)), color-stop(100%, rgba(60, 44, 44, 0)));
            background: -webkit-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
            background: -o-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
            background: -ms-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
            background: radial-gradient(ellipse at center, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a66f1919', endColorstr='#003c2c2c',GradientType=1 ); }
        .error-page h2:after {
            width: 130px;
            height: 1px;
            content: '';
            display: block;
            opacity: 0.2;
            margin: 0 auto;
            top: 11px;
            position: relative;
            background: -moz-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(247, 173, 148, 0.65)), color-stop(99%, rgba(255, 255, 255, 0.01)), color-stop(100%, rgba(255, 255, 255, 0)));
            background: -webkit-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
            background: -o-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
            background: -ms-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
            background: radial-gradient(ellipse at center, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a6f7ad94', endColorstr='#00ffffff',GradientType=1 ); }

        .error-back {
            text-decoration: none;
            color: #430400;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: bold;}
        .error-back:hover {
            color: #EB957D;
            text-shadow: 0 0 3px black;
            text-transform: uppercase;
            font-weight: bold;
        }
        .error-page h2 {
            margin: 90px 0 29px 0;
            font-size: 17px;
        }
    </style>

<div class="container">
    <div class="row">
        <div class="error-page-wrap">
            <article class="error-page gradient">
                <hgroup>
                    <h1>{{$e->getStatusCode()}}</h1>
                    <h2>{{ $e->getMessage() }}</h2>
                </hgroup>
                <a href="#" title="Back to site" class="error-back">Trang chủ</a>
            </article>
        </div>
    </div>
</div>

@stop