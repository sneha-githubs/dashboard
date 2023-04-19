<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/fav.png" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="" height="35">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                   <span class="logo-sm">
                        <img src="assets/images/fav.png" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="" height="35">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Search Result">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if(Auth::user()): ?>
                    <img class="rounded-circle header-profile-user"
                        src="<?php if(Auth::user()->avatar != ''): ?><?php echo e(asset('images/' . Auth::user()->avatar)); ?><?php else: ?><?php echo e(asset('assets/images/users/avatar-1.jpg')); ?><?php endif; ?>"
                        alt="Header Avatar">
                    <?php else: ?>
                     <img class="rounded-circle header-profile-user"
                        src="<?php echo e(asset('assets/images/users/avatar-1.jpg')); ?>"
                        alt="Header Avatar">
                        <?php endif; ?>
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">Admin</span>
               
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="auth-register"><i
                            class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Change Password</a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="mdi mdi-logout font-size-16 align-middle me-1"></i> <span key="t-logout">Log
                            Out</span></a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>