<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="blue">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">

            <a href="index" class="simple-text logo-normal">
                Hlavna stránka
            </a>
        </div>
        @if(Auth::user()->isAdmin())
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="{{route('AllUsers')}}">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Uživatelia</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('AllEvents')}}">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Podujatia</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('AllVyzvi')}}">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Vyzvy</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('AllUniverzity')}}">
                            <i class="now-ui-icons location_world"></i>
                            <p>Univerzity</p>
                        </a>
                    </li>


                </ul>
            </div>
        @endif
        @if(Auth::user()->isReferent())
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{route('AllEvents')}}">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Podujatia</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('AllVyzvi')}}">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Vyzvy</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('AllUniverzity')}}">
                            <i class="now-ui-icons location_world"></i>
                            <p>Univerzity</p>
                        </a>
                    </li>


                </ul>
            </div>
        @endif

    </div>