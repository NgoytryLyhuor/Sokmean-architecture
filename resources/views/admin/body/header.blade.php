<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img class="my-no-shadow" src="{{ asset('backend/assets/images/logo.png') }}" alt="logo-light" height="30" style="margin-left: -12px;">
                    </span>
                    <span class="logo-lg">
                        <img class="my-no-shadow" src="{{ asset('backend/assets/images/logo.png') }}" alt="logo-light" height="30" style="margin-left: -17px;margin-top: -7px;">
                        <span class="text-white" style="font-size: 18px;margin-left: 5px;">Norkor Architecture</span>
                    </span>
                </a>

            </div>
            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>
        </div>

        @php
            $id = Auth::user()->id;
            $adminData = App\Models\User::find($id);
        @endphp

        <div class="d-flex">
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img style="object-fit: cover;" class="rounded-circle header-profile-user"
                        src="{{ !empty($adminData->profile_image) ? url('upload/admin_images/' . $adminData->profile_image) : url('no_image.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ $adminData->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href=""><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger"
                            style="background: none; border: none; cursor: pointer;">
                            <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
