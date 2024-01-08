<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('AdminLTE-3.2.0/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLTE-3.2.0/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                    
                    <li class="nav-header">MASTER</li>
                    <li>
                        <a href="{{ route('kategori.index') }}" class="nav-link">
                            <i class="fa fa-cube" aria-hidden="true"></i>
                            <p>Kategori</p>
                        </a>
                        <a href="{{ route('produk.index') }}" class="nav-link">
                            <i class="fa fa-code" aria-hidden="true"></i>
                            <p>Produk</p>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <p>Member</p>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            <p>Supplier</p>
                        </a>
                    </li>
                    
                    <li class="nav-header">TRANSAKSI</li>
                    <li>
                        <a href="#" class="nav-link">
                            <i class="fa fa-random" aria-hidden="true"></i>
                            <p>Pengeluaran</p>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            <p>Pembelian</p>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            <p>Penjualan</p>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <p>Transaksi Lama</p>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fa fa-window-restore" aria-hidden="true"></i>
                            <p>Transaksi Baru</p>
                        </a>
                    </li>

                    <li class="nav-header">REPORT</li>
                    <li>
                        <a href="#" class="nav-link">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                    <li class="nav-header">SYSTEM</li>
                    <li>
                        <a href="#" class="nav-link">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <p>User</p>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fa fa-database" aria-hidden="true"></i>
                            <p>Pengaturan</p>
                        </a>
                    </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
