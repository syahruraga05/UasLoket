<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
        <i class="fas fa-clinic-medical"></i>
        <span class="brand-text font-weight-light">Rumah Sakit Medirossa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <i class="fas fa-users"></i>
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?php
                    if (session()->get('id')) {
                        echo session()->get('fullname');
                    } else {
                        echo "Pengunjung";
                    }
                    ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/" class="nav-link active">
                        <i class="fas fa-laptop-medical"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                    <?php if (session()->get('id') && session()->get('role') == 1) { ?>
                        <a href="/antrian" class="nav-link">
                            <i class="fas fa-user-circle"></i>
                            <p>
                                Antrian
                            </p>
                        </a>
                    <?php } ?>
                    <?php if (session()->get('id') && session()->get('role') == 0) { ?>
                        <a href="/laporan" class="nav-link">
                            <i class="fas fa-file-medical-alt"></i>
                            <p>
                                Laporan Harian
                            </p>
                        </a>
                        <a href="/loket" class="nav-link">
                            <i class="far fa-address-book"></i>
                            <p>
                                Daftar loket
                            </p>
                        </a>
                        <a href="/pelayan" class="nav-link">
                            <i class="fas fa-user-nurse"></i>
                            <p>
                                User Dan Pelayanan
                            </p>
                        </a>
                    <?php } ?>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>