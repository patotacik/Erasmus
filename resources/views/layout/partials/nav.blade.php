<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand"href="index">
            <img src="images/ukf.png" alt="Logo"  style="width:80px;">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="erasmus" class="nav-link">Erasmus+</a></li>
                <li class="nav-item"><a href="staz" class="nav-link">Stáž</a></li>
                <li class="nav-item"><a href="kontakt" class="nav-link">Informacie</a></li>
                @guest
                @else
                    @if(Auth::user()->isUcasnik())
                        <li class="nav-item"><a href="{{route('ucasnik')}}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{route('seminar')}}" class="nav-link">Informačné semináre</a></li>
            </ul>
            @endif
            @endguest
            @guest


            <a class="navbar-brand">
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#myModal"data-color="blue">
                    Prihlásenie
                </button>
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">
                        Registracia
                    </button></a>
                @else



                <a class="navbar-brand"  role="button" aria-expanded="false" aria-haspopup="true" v-pre>

                         {{ Auth::user()->name }} <span class="caret"></span></a>
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
                <div class="avatar">
                    <img src="images/ukf.png" alt="Avatar" >
                </div>
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
                <div class="avatar">
                    <img src="images/ukf.png" alt="Avatar" >
                </div>
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








