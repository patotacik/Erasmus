<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand"href="{{ URL::asset('index')}}">
            <img src="{{ URL::asset('images/ukf.png')}}" alt="Logo"  style="width:80px;">
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
                       </div>
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
                    </div>

                @guest
                @else
                    @if(Auth::user()->isUcasnik())
                        <li class="nav-item"><a href="{{route('ucasnik')}}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{route('seminar')}}" class="nav-link">Informačné semináre</a></li>
                        <li class="nav-item"><a href="{{route('potvrdenie.details', Auth::user()->id)}}" class="nav-link">Potrvrené žiadosti</a></li>


                    @endif
                @endguest
                @guest
                @else
                    @if(Auth::user()->isReferent())
                        <li class="nav-item"><a href="{{route('ucasnik')}}" class="nav-link">Uprava Výzvy</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Pridať partnerské univerzity</a></li>
                        <li class="nav-item"><a href="{{route('seminar')}}" class="nav-link">Správy účastníkov</a></li>

                    @endif
                @endguest

            </ul>
            @guest


            <a class="navbar-brand">
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#myModal"data-color="blue">
                    Prihlásenie
                </button>
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">
                        Registracia
                    </button></a>
                @else


                <p class="navbar-text" >
                    {{ Auth::user()->name }}</p>

                <a class="navbar-brand" href="{{ route('logout') }}" onclick="event.preventDefault();       document.getElementById('logout-form').submit();">
                            <button type="button" class="btn btn-danger">Odhlásiť</button></a>
              <form id="logout-form" class="navbar-brand" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                    </form>
                    @if(Auth::user()->isAdmin())
                        <a class="navbar-brand">
                            <a class="btn btn-primary" href="{{route('admin')}}" role="button">Admin rozhranie</a>
                        </a>
                    @endif
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
                                Registácia
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="modal-backdrop" class="modal-backdrop-transparent modal-transition"></div>

</div>








