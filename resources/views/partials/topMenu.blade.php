.
<div class="row">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button"
                        class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#navbar"
                        aria-expanded="false"
                        aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">The Final Whistle</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/profile/{{ Auth::id() }}">Profile</a></li>
                    <li><a href="/training">Training</a></li>
                    <li><a href="/gym">Gym</a></li>
                    <li><a href="#">Match</a></li>
                    <li><a href="/shop">Shop</a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li class="pull-right"><a href="/auth/logout">Logout <i class="fa fa-sign-out"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
