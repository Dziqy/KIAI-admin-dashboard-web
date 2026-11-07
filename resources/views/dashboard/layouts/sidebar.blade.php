<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a href="/dashboard" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/user" aria-expanded="false">
                            <i class="icon-user"></i><span class="nav-text">Personal Info</span>
                        </a>
                    </li>
                    @can('takmir')
                    <li class="nav-label">Majelis / Kajian</li>
                    <li>
                        <a href="/dashboard/kajian" aria-expanded="false">
                            <i class="fa fa-pencil-square"></i><span class="nav-text">Data Kajian</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/profil" aria-expanded="false">
                            <i class="fa fa-home"></i><span class="nav-text">Profil Majelis/Kajian</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/asatidz/ajukan" aria-expanded="false">
                            <i class="fa fa-user-plus"></i><span class="nav-text">Ajukan Asatidz</span>
                        </a>
                    </li>
                    @endcan
                    @can('admin')
                    <li class="nav-label">Admin</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-bank"></i> <span class="nav-text">Kelola Majelis/Kajian <span class="badge badge-pill gradient-2">{{ $notif_register }}</span></span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/dashboard/kelola_register">Data Register <span class="badge badge-pill gradient-2">{{ $notif_register }}</span></a></li>
                            
                            <li><a href="/dashboard/kelola_majelis">Data Majelis/Kajian</a></li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card"></i> <span class="nav-text">Kelola Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/dashboard/kelola_pengajuan">Takmir/DKM</a></li>
                            <li><a href="/dashboard/kelola_asatidz">Administrator</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="/dashboard/kelola_users" aria-expanded="false">
                            <i class="fa fa-address-card"></i><span class="nav-text">Kelola Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-users"></i> <span class="nav-text">Kelola Asatidz</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/dashboard/kelola_pengajuan">List Pengajuan</a></li>
                            <li><a href="/dashboard/kelola_asatidz">List Asatidz</a></li>
                        </ul>
                    </li>
                    @endcan
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->