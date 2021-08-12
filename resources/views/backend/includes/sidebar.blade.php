<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-fixed sidebar-expand-md">

<!-- Sidebar mobile toggler -->
<div class="sidebar-mobile-toggler text-center">
    <a href="#" class="sidebar-mobile-main-toggle">
        <i class="icon-arrow-left8"></i>
    </a>
    Navigation
    <a href="#" class="sidebar-mobile-expand">
        <i class="icon-screen-full"></i>
        <i class="icon-screen-normal"></i>
    </a>
</div>
<!-- /sidebar mobile toggler -->

<!-- Sidebar content -->
<div class="sidebar-content">
    
    <!-- User menu -->
    <div class="sidebar-user">
        <div class="card-body">
            <div class="media">
                <div class="mr-3">
                    <a href="#"><img src="{{asset('aset/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
                </div>

                <div class="media-body">
                    <div class="media-title font-weight-semibold">{{Auth::user()->name}}</div>
                    <div class="font-size-xs opacity-50">
                        <i class="icon-pin font-size-sm"></i> &nbsp; JL.cimanggis raya 
                    </div>
                </div>

                <div class="ml-3 align-self-center">
                    <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /user menu -->

    
    <!-- Main navigation -->
    <div class="card card-sidebar-mobile">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <!-- Main -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item nav-item-submenu">
                <a href="{{route('home')}}" class="nav-link active">
                    <i class="icon-home4"></i>
                    <span>
                        Dashboard
                        <span class="d-block font-weight-normal opacity-50">welcome to dashboard</span>
                    </span>
                </a>

                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="{{route('welcome')}}" class="nav-link" target="_blank">view website</a></li>
                </ul>
            </li>

            
            <li class="nav-item nav-item-submenu">
                <a href="" class="nav-link"><i class="icon-users"></i> <span>Manajemen Pengguna</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="{{route('management.index')}}" class="nav-link">users</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-database4"></i> <span>Master Data</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="" class="nav-link">users</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="{{route('product.index')}}" class="nav-link"><i class="icon-box"></i> <span>Manajemen Produk</span></a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="icon-cabinet"></i> <span>Inventaris</span></a></li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-coins"></i> <span>Manajemen Kategori</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="" class="nav-link">Kategori</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Tags</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="" class="nav-link"><i class="icon-chart"></i> <span>Reporting Charts</span></a></li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-coins"></i> <span>Orders</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="" class="nav-link">orders history</a></li>
                    <li class="nav-item"><a href="" class="nav-link">manage orders</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="" class="nav-link"><i class="icon-history"></i> <span>DB Transaksi</span></a></li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-cog"></i> <span>Setting</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    <li class="nav-item"><a href="" class="nav-link">navbar</a></li>
                    <li class="nav-item"><a href="" class="nav-link">header image</a></li>
                </ul>
            </li>
            <!-- /main -->
        </ul>
    </div>
    <!-- /main navigation -->
</div>
<!-- /sidebar content -->
</div>
<!-- /main sidebar -->
