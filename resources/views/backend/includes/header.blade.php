<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-light">

<!-- Header with logos -->
<div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
    <div class="navbar-brand navbar-brand-md">
        <a href="index.html" class="d-inline-block">
            <img src="../../../../global_assets/images/logo_light.png" alt="">
        </a>
    </div>
    
    <div class="navbar-brand navbar-brand-xs">
        <a href="index.html" class="d-inline-block">
            <img src="../../../../global_assets/images/logo_icon_light.png" alt="">
        </a>
    </div>
</div>
<!-- /header with logos -->


<!-- Mobile controls -->
<div class="d-flex flex-1 d-md-none">
    <div class="navbar-brand mr-auto">
        <a href="index.html" class="d-inline-block">
            <img src="../../../../global_assets/images/logo_dark.png" alt="">
        </a>
    </div>	

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
        <i class="icon-tree5"></i>
    </button>

    <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
        <i class="icon-paragraph-justify3"></i>
    </button>
</div>
<!-- /mobile controls -->


<!-- Navbar content -->
<div class="collapse navbar-collapse" id="navbar-mobile">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                <i class="icon-paragraph-justify3"></i>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                <i class="icon-people"></i>
                <span class="d-md-none ml-2">Users</span>
                <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
            </a>
            
            <div class="dropdown-menu dropdown-content wmin-md-300">
                <div class="dropdown-content-header">
                    <span class="font-weight-semibold">Users online</span>
                    <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                </div>

                <div class="dropdown-content-body dropdown-scrollable">
                    <ul class="media-list">
                        <li class="media">
                            <div class="mr-3">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
                                <span class="d-block text-muted font-size-sm">Calon karyawan</span>
                            </div>
                            <div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
                        </li>

                    </ul>
                </div>

                <div class="dropdown-content-footer bg-light">
                    <a href="#" class="text-grey mr-auto">All users</a>
                    <a href="#" class="text-grey"><i class="icon-gear"></i></a>
                </div>
            </div>
        </li>
    </ul>

    <span class="badge bg-pink-400 badge-pill ml-md-3 mr-md-auto">1 users online</span>

    <ul class="navbar-nav">

        <li class="nav-item dropdown">
            <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                <i class="icon-bubbles4"></i>
                <span class="d-md-none ml-2">Messages</span>
                <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                <div class="dropdown-content-header">
                    <span class="font-weight-semibold">Messages</span>
                    <a href="#" class="text-default"><i class="icon-compose"></i></a>
                </div>

                <div class="dropdown-content-body dropdown-scrollable">
                    <ul class="media-list">

                        <li class="media">
                            <div class="mr-3">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title">
                                    <a href="#">
                                        <span class="font-weight-semibold">Lyy23</span>
                                        <span class="text-muted float-right font-size-sm">Mon</span>
                                    </a>
                                </div>
                                
                                <span class="text-muted">kontrak Lyy23 habis</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="dropdown-content-footer bg-light">
                    <a href="#" class="text-grey mr-auto">All messages</a>
                    <div>
                        <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
                        <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown dropdown-user">
            <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('aset/images/placeholders/placeholder.jpg')}}" class="rounded-circle mr-2" height="34" alt="">
                <span>{{Auth::user()->name}}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                <!-- <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-indigo-400 ml-auto">58</span></a> -->
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="icon-switch2"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
            </div>
        </li>
    </ul>
</div>
<!-- /navbar content -->

</div>
<!-- /main navbar -->
