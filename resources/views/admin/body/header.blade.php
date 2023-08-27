  <style>
/* Styles for the header */
#page-topbar {
    background-color: #35495e;
    color: #ffffff;
}

/* Logo styles */
.navbar-brand-box {
    margin: 0;
}

.logo {
    display: inline-block;
    margin-right: 20px;
    vertical-align: middle;
}

.logo img {
    max-height: 40px;
    vertical-align: middle;
}

/* Search bar styles */
.app-search {
    display: inline-block;
    margin-left: auto;
    margin-right: 20px;
}

.app-search input[type="text"] {
    background-color: #2c3e50;
    border: none;
    border-radius: 20px;
    color: #ffffff;
    padding: 8px 15px;
    width: 200px;
    transition: background-color 0.3s ease;
}

.app-search input[type="text"]:focus {
    background-color: #34495e;
}

.app-search .ri-search-line {
    color: #ffffff;
}

/* User dropdown styles */
.user-dropdown {
    margin-left: 20px;
}

.header-profile-user {
    width: 36px;
    height: 36px;
    object-fit: cover;
    border-radius: 50%;
    margin-right: 10px;
}

.dropdown-menu {
    background-color: #2c3e50;
    border: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    color: #ffffff;
}

.dropdown-item {
    color: #ffffff;
    transition: background-color 0.3s ease;
}

.dropdown-item:hover {
    background-color: #34495e;
}

/* Fullscreen and menu button styles */
.header-item {
    background-color: transparent;
    border: none;
    color: #ffffff;
    cursor: pointer;
    font-size: 24px;
    margin-right: 10px;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    /* Adjustments for smaller screens */
    .app-search {
        display: none;
    }

    .user-dropdown {
        margin-left: auto;
    }
}


  </style>
  
  
  
  <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-sm" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo-dark" height="35">
                                </span>
                            </a>

                            <a class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-sm-light" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="logo-light" height="35">
                                </span>
                            </a>
                        </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
        <i class="ri-menu-2-line align-middle"></i>
    </button>

    <!-- App Search-->
    <!-- <form class="app-search d-none d-lg-block">
        <div class="position-relative">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="ri-search-line"></span> 
        </div>
    </form> -->

    
</div>

<div class="d-flex">





    @php
    $id = Auth::user()->id;
    $adminData = App\Models\User::find($id);
    @endphp

    <div class="dropdown d-inline-block user-dropdown">
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle header-profile-user" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}"
                alt="Header Avatar">
            <span class="d-none d-xl-inline-block ms-1">{{ $adminData->name }}</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="ri-user-line align-middle me-1"></i> Profile</a>
            <a class="dropdown-item" href="{{ route('change.password') }}"><i class="ri-wallet-2-line align-middle me-1"></i> Change Password</a>

            <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
        </div>
    </div>

                        
            
                    </div>
                </div>
            </header>