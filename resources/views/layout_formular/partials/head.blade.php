<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL::asset('form/images/icons/favicon.ico') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL::asset('form/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL::asset('form/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL::asset('form/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL::asset('form/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL::asset('form/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL::asset('form/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL::asset('form/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL::asset('form/css/util.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('form/css/main.css') }}">


    <style>
        /****** Rating Starts *****/
        @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        .rating > input { display: none; }
        .rating > label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }
        .rating > .half:before {
            content: "\f089";
            position: absolute;
        }
        .rating > label {
            color: #ddd;
            float: right;
        }
        .rating > input:checked ~ label,
        .rating:not(:checked) > label:hover,
        .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }
        .rating > input:checked + label:hover,
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label,
        .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }
        /* Downloaded from http://devzone.co.in/ */
    </style>