<?php $__env->startSection('head-title',"Account"); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("account")); ?>"><i class="material-icons">account_box</i>   Quản Lý Tài Khoản</a></li>
                    <li class="active"><i class="material-icons">create</i> Chinh Sửa</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row clearfix">
            <div class="card">
                <div class="header">
                    <h4>
                        Tài Khoản: <?php echo e($user->__get("email")); ?>

                    </h4>

                </div>
                <?php if(count($errors)>0): ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <strong><?php echo e($err); ?></strong> ...
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <div class="body">
                    <form method="post" action="<?php echo e(url("admin/account/update/{$user->__get("id")}")); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>










                        <label for="password">Họ Tên:</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input class="form-control" id="" value="<?php echo e($user->__get("user_name")); ?>" type="text" name="user_name"   placeholder="Nhập tên của bạn..">
                            </div>
                        </div>
                        <label for="password">SĐT:</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input class="form-control" id="" value="<?php echo e($user->__get("phone_number")); ?>" type="text" name="phone_number"   placeholder="Nhập SĐT..">
                            </div>
                        </div>
                        <label for="password">Địa Chỉ:</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input class="form-control" id="" value="<?php echo e($user->__get("address")); ?>" type="text" name="address"   placeholder="Nhập Địa Chỉ..">
                            </div>
                        </div>
                        <label for="">Chon ảnh</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input class="form-control" id="" type="file" name="image"   >
                            </div>

                        </div>


                        <br>
                        <button class="btn bg-cyan waves-effect" type="submit">CẬP NHẬT TÀI KHOẢN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/account/edit.blade.php ENDPATH**/ ?>