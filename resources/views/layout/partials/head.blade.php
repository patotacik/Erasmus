<meta charset="utf-8">
<link rel="icon" type="image/png" href="images/ukf.png"/>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">

<title>Erasmus+</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ URL::asset('blog/style.css') }}">

<link rel="stylesheet" href="{{ URL::asset('css/open-iconic-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">

<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">

<link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">

<link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">

<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/jquery.timepicker.css') }}">

<link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">



<link rel="stylesheet" href="{{ URL::asset('form/css/opensans-font.css') }}">
<link rel="stylesheet" href="{{ URL::asset('form/css/montserrat-font.css') }}">
<link rel="stylesheet" href="{{ URL::asset('form/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
<!-- Main Style Css -->
<link rel="stylesheet" href="{{ URL::asset('form/css/style.css') }}">
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


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

<style>


.event-list {
list-style: none;
font-family: 'Lato', sans-serif;
margin: 0px;
padding: 0px;
}
.event-list > li {
background-color: rgb(255, 255, 255);
box-shadow: 0px 0px 5px rgb(51, 51, 51);
box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
padding: 0px;
margin: 0px 0px 20px;
}
.event-list > li > time {
display: inline-block;
width: 100%;
color: rgb(255, 255, 255);
background-color: rgb(197, 44, 102);
padding: 5px;
text-align: center;
text-transform: uppercase;
}
.event-list > li:nth-child(even) > time {
background-color: rgb(165, 82, 167);
}
.event-list > li > time > span {
display: none;
}
.event-list > li > time > .day {
display: block;
font-size: 56pt;
font-weight: 100;
line-height: 1;
}
.event-list > li time > .month {
display: block;
font-size: 24pt;
font-weight: 900;
line-height: 1;
}
.event-list > li > img {
width: 100%;
}
.event-list > li > .info {
padding-top: 5px;
text-align: center;
}
.event-list > li > .info > .title {
font-size: 17pt;
font-weight: 700;
margin: 0px;
}
.event-list > li > .info > .desc {
font-size: 13pt;
font-weight: 300;
margin: 0px;
}
.event-list > li > .info > ul,
.event-list > li > .social > ul {
display: table;
list-style: none;
margin: 10px 0px 0px;
padding: 0px;
width: 100%;
text-align: center;
}
.event-list > li > .social > ul {
margin: 0px;
}
.event-list > li > .info > ul > li,
.event-list > li > .social > ul > li {
display: table-cell;
cursor: pointer;
color: rgb(30, 30, 30);
font-size: 11pt;
font-weight: 300;
padding: 3px 0px;
}
.event-list > li > .info > ul > li > a {
display: block;
width: 100%;
color: rgb(30, 30, 30);
text-decoration: none;
}
.event-list > li > .social > ul > li {
padding: 0px;
}
.event-list > li > .social > ul > li > a {
padding: 3px 0px;
}
.event-list > li > .info > ul > li:hover,
.event-list > li > .social > ul > li:hover {
color: rgb(30, 30, 30);
background-color: rgb(200, 200, 200);
}
.facebook a,
.twitter a,
.google-plus a {
display: block;
width: 100%;
color: rgb(75, 110, 168) !important;
}
.twitter a {
color: rgb(79, 213, 248) !important;
}
.google-plus a {
color: rgb(221, 75, 57) !important;
}
.facebook:hover a {
color: rgb(255, 255, 255) !important;
background-color: rgb(75, 110, 168) !important;
}
.twitter:hover a {
color: rgb(255, 255, 255) !important;
background-color: rgb(79, 213, 248) !important;
}
.google-plus:hover a {
color: rgb(255, 255, 255) !important;
background-color: rgb(221, 75, 57) !important;
}

@media (min-width: 768px) {
.event-list > li {
position: relative;
display: block;
width: 100%;
height: 120px;
padding: 0px;
}
.event-list > li > time,
.event-list > li > img  {
display: inline-block;
}
.event-list > li > time,
.event-list > li > img {
width: 120px;
float: left;
}
.event-list > li > .info {
background-color: rgb(245, 245, 245);
overflow: hidden;
}
.event-list > li > time,
.event-list > li > img {
width: 120px;
height: 120px;
padding: 0px;
margin: 0px;
}
.event-list > li > .info {
position: relative;
height: 120px;
text-align: left;
padding-right: 40px;
}
.event-list > li > .info > .title,
.event-list > li > .info > .desc {
padding: 0px 10px;
}
.event-list > li > .info > ul {
position: absolute;
left: 0px;
bottom: 0px;
}
.event-list > li > .social {
position: absolute;
top: 0px;
right: 0px;
display: block;
width: 40px;
}
.event-list > li > .social > ul {
border-left: 1px solid rgb(230, 230, 230);
}
.event-list > li > .social > ul > li {
display: block;
padding: 0px;
}
.event-list > li > .social > ul > li > a {
display: block;
width: 40px;
padding: 10px 0px 9px;
}
}
</style>