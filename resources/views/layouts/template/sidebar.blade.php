<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
      
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="https://avatar.uimaterial.com/?setId=j0U8zmEwkjhzMVzW6ZSO&name={{ Auth::user()->name }}"
                                alt="user-image" class="user-avtar wid-45 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                            <?php $auth = Auth::user()->getRoleNames()->first(); ?>
                            <small>{{ Str::upper( $auth->name) }}</small>
                        </div>
                        <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                            href="#pc_sidebar_userlink">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="javascript:void(0)" onclick="$(this).closest('form').submit()">
                                    <i class="ti ti-power"></i>
                                    <span>Logout</span>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="@if (auth()->user()->role_id == 1){{url('/admin')}}@endif @if (auth()->user()->role_id == 2){{url('/dashboard')}}@endif" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-status-up"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                @if (auth()->user()->role_id == 1)
                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('users.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-user"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">User Management</span>
                    </a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="javascript:void(0)" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-document-upload"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">File Upload</span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a href="{{ route('file_uploads.surat_masuk') }}" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#icon-surat-masuk"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext">Surat Masuk</span>
                            </a>
                        </li>
                        <li class="pc-item">
                            <a href="{{ route('file_uploads.surat_keluar') }}" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="#icon-surat-keluar"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext">Surat Keluar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('publications.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-status-up"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">Publikasi</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('results.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-status-up"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">Hasil</span>
                    </a>
                </li>
                
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end -->
