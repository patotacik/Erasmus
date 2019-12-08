@extends('layout.mainlayout')
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/detail.png')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <h2 class="mb-2">{{$details->Nazov}}</h2>
                    <b>Univerzita: </b><p></p>
                    <span class="subheading">{{$details->podUni->nazov}}</span>
                    <h3>Mesto: {{$details->podMes->name}}</h3>
                    <h3 class="location">Krajina: {{$details->podKraj->name}}</h3>
                    <h3>Dátum: {{$details->datum}}</h3>
                </div>
            </div>
        </div>
                <div style="color:black;padding-left:15%;padding-right: 15%">
                    <h2 class="mb-2">Popis: </h2>
                    <p style="align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse velit nibh, vulputate at neque nec, laoreet tincidunt magna. Maecenas auctor ipsum a mi aliquam, sed scelerisque mi vestibulum. Quisque id dolor a ante varius iaculis nec sit amet velit. Vivamus sed ultricies tellus. Maecenas suscipit, quam non varius porttitor, massa massa volutpat enim, sed ultricies neque tellus sit amet neque. Etiam aliquet erat et turpis auctor, vel luctus nunc congue. Donec rhoncus maximus turpis, vitae maximus dui facilisis porttitor. Pellentesque eu egestas justo. Nam auctor, lorem in aliquet dignissim, tellus metus sagittis justo, at sodales eros arcu ac risus.

                        Suspendisse nec congue dolor, vel tincidunt sem. Cras vehicula orci eget justo facilisis scelerisque. Pellentesque eget odio pharetra, elementum lacus eget, commodo velit. Suspendisse facilisis ullamcorper metus ut porttitor. Phasellus condimentum porttitor tristique. Donec purus massa, laoreet et convallis ut, consectetur id dolor. Duis sagittis aliquet tempor.</p>

                </div>
                <div class="center" style="padding-left:15%; padding-right: 15%">
                    <img src="{{ URL::asset('images/work-1.jpg')}}"alt="nananana">
                </div>

        </section>
@endsection
