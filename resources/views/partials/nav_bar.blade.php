<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><i class="fa fa-coffee"></i> Coffee Lover</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <form class="navbar-form navbar-left" method="get" action="{{route('search-content')}}">
                    <div class="col-xs-10">
                        <div class="form-group">
                            <input type="search" name="q" id="q" class="form-control" placeholder="Search">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>

                </form>

            </ul>


            @if(Auth::User())
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::User()->hasRole('Waiter'))
                    <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i> Cart <span class="badge"><div id="cart-qty"></div></span></a></li>
                    @endif
                    <li><a href="{{route('dashboard')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{Auth::User()->user_name}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('profile')}}"><i class="fa fa-fw fa-user-circle-o"></i> Profile</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                </ul>
                @else
                <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('login')}}">Login</a></li>
                </ul>
                @endif


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>