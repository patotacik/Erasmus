<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand"href="{{ URL::asset('index')}}">
            <img src="{{ URL::asset('images/pok.png')}}" alt="Logo"  style="width:150px;">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ URL::asset('erasmus')}}" class="nav-link">Erasmus+</a></li>
                <li class="nav-item"><a href="{{ URL::asset('staz')}}" class="nav-link">Stáž</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Iné pobyty
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Prednáškový pobyt</a>
                        <a class="dropdown-item" href="#">Školenia</a>
                    </div></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Kontakty                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="odd_medzin_vzt">Oddelenie medzinárodných vzťahov a jeho pracovníci</a>
                        <a class="dropdown-item" href="kontakt">Katedroví koordinátori</a>
                        <a class="dropdown-item" href="faktultný_koordinatori">Fakultní koordinátori</a>
                        <a class="dropdown-item" href="kontakt">Študentskí ambasádori programu</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="kontakt">Kde nás najdete</a>
                    </div></li>




            @guest


            <a class="navbar-brand">
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#myModal"data-color="blue">
                    <span class="glyphicon glyphicon-log-out"></span>  Prihlásenie
                </button>
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">
                   <span class="glyphicon glyphicon-registration-mark"></span>      Registracia
                    </button></a>
                @else

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i>                            {{ Auth::user()->name }}                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @guest
                    @else
                        @if(Auth::user()->isReferent())
                            <a class="dropdown-item"href="{{route('AllEvents')}}">Správa výziev</a>
                            <a class="dropdown-item" href="{{route('spravy')}}" > Správy účastníkov mobility</a>
                            <a class="dropdown-item" href="{{route('AllUniverzity')}}"> Pridánie partnerskéj univerzity</a>
                        @endif
                    @endguest


                    @guest
                    @else
                        @if(Auth::user()->isUcasnik())
                            <a class="dropdown-item" href="{{route('blogy')}}">Blog</a>
                            <a class="dropdown-item" href="{{route('seminar')}}" >Informačné semináre</a>
                            <a class="dropdown-item" href="{{route('potvrdenie.details', Auth::user()->id)}}">Potvrdené žiadosti</a>


                        @endif
                    @endguest
                    @if(Auth::user()->isAdmin())
                            <a class="dropdown-item"  href="{{route('AllUsers')}}">Admin rozranie</a>
                    @endif
                            <div class="dropdown-divider" ></div>


                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();       document.getElementById('logout-form').submit();"> <div class="p-3 mb-2 bg-danger text-white">
                                    <span class="glyphicon glyphicon-log-out"></span> Odhlásiť</div></a>
                            <form id="logout-form" class="navbar-brand" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>


                        </div></li>

            @endguest


    </div>
    </div>
</nav>



<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title">Prihlásenie</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="ID" required="required"   name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Heslo" id="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Prihlásiť</button>
                    </div>
                    <a class="dropdown-item"  href="{{route('password.request')}}">Zabudol si heslo ?</a>

                </form>

            </div>
        </div>
    </div>
</div>






<div id="myModal2" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Registrácia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Meno a Priezvisko</label>

                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">E-Mail </label>

                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" >Heslo</label>

                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>


                    <div class="form-group">
                        <label for="password-confirm" >Znovu Heslo</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Registrácia
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="modal-backdrop" class="modal-backdrop-transparent modal-transition"></div>

</div>








