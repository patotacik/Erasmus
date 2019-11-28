@extends('layout.mainlayout')
@section('content')

    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/inf.jpg')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Tvoje pobyty</span>
                    <h2 class="mb-2">Nezabudni na ohodnotenie</h2>
                </div>
                @foreach($details as $row)
                    <div class="col">
                        <div class="property-wrap ftco-animate">
                            <a data-toggle="modal" data-target="#myhodnotenie" method="post" class="img" style="background-image: url({{ URL::asset('images/hod.png')}});"></a>
                            <div class="text">
                                <h3>{{$row->Nazov}}</h3>
                                <h3>Dátum: {{$row->datum}}</h3>
                                <h3 class="location">Miesto: {{$row->Miesto}}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>




    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $row->Nazov }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>


                <form action="" method="POST">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="container-fliud">
                            <div class="wrapper row">
                                <div class="preview col-md-6">
                                    <div class="preview-pic tab-content">
                                        <div class="tab-pane active" id="pic-1"><img src="https://dummyimage.com/300x300/0099ff/000" /></div>
                                    </div>
                                </div>
                                <div class="details col-md-6">
                                    <h3 class="product-title">Laravel 5.5 Ratting System</h3>
                                    <div class="rating">
                                        <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $row->Nazov }}" data-size="xs">
                                        <input type="hidden" name="id" required="" value="{{ $row->id }}">
                                        <br/>
                                        <button class="btn btn-success">Submit Review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


                   </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
    </div>


    <div class="modal" id="myhodnotenie">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">{{ $row->Nazov }}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">


                        <h2>Bootstrap star rating example</h2>


                        <br/>
                        <label for="input-1" class="control-label">Give a rating for Skill:</label>
                        <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="2">



                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <script>
        $("#input-id").rating();
    </script>
@endsection