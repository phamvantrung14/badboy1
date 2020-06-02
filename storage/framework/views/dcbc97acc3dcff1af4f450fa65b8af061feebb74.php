<div class="user-info">
    <?php if(Auth::check()): ?>
    <div class="image">
        <img src="<?php echo e(asset(Auth::user()->image)); ?>" width="48" height="48" alt="User" />
    </div>
    <div class="info-container">

        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->user_name); ?></div>
        <div class="email"><?php echo e(Auth::user()->email); ?></div>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">

                <li role="separator" class="divider"></li>
                <li><a href="<?php echo e(url("admin/account/edit/")); ?>/<?php echo e(Auth::user()->id); ?>"><i class="material-icons">settings</i>Cập Nhật TT</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo e(url("admin/account/edit-pas/")); ?>/<?php echo e(Auth::user()->id); ?>"><i class="material-icons">update</i>Đổi Mật Khẩu</a></li>

                <li role="separator" class="divider"></li>
                <li><a href="<?php echo e(route("logout-ad")); ?>"><i class="material-icons">input</i>Sign Out</a></li>
            </ul>
        </div>

    </div>
    <?php endif; ?>
</div>
<!-- #User Info -->
<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="<?php echo e(route("admin")); ?>">
                <i class="material-icons">home</i>
                <span>Trang chủ</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">view_week</i>
                <span>Loại sản phẩm</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo e(route('type-products')); ?>">Danh Sách Loại Sản Phẩm</a>
                </li>
                <li>
                    <a href="<?php echo e(route('new-type-pd')); ?>">Thêm Mới Loại Sản Phẩm</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">perm_media</i>
                <span>Slide</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo e(route('slide')); ?>">Danh Sách Slide</a>
                </li>
                <li>
                    <a href="<?php echo e(route('new-slide')); ?>">Thêm Mới Slide</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">store</i>
                <span>Hệ thống cửa hàng</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo e(url("admin/store")); ?>">Danh Sách Cửa Hàng</a>
                </li>
                <li>
                    <a href="<?php echo e(route('new-store')); ?>">Thêm Mới Cửa Hàng</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">view_list</i>
                <span>Sản Phẩm</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo e(route("products")); ?>">Danh Sách Sản Phẩm</a>
                </li>
                <li>
                    <a href="<?php echo e(route('new-products')); ?>">Thêm Mới Sản Phẩm</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">book</i>
                <span>Tin Tức</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo e(route("news")); ?>">Danh Sách Tin Tức</a>
                </li>
                <li>
                    <a href="<?php echo e(route('new-news')); ?>">Thêm Mới Tin Tức</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">account_box</i>
                <span>Tài Khoản</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo e(route("account")); ?>">Danh Sách Tài Khoản</a>
                </li>
            </ul>
        </li>












    </ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
    <div class="copyright">
        &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
    </div>
    <div class="version">
        <b>Version: </b> 1.0.5
    </div>
</div>
<?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/components/leftsidebar.blade.php ENDPATH**/ ?>