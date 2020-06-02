<?php $__env->startSection('head-title',"Account"); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("account")); ?>"> <i class="material-icons">account_box</i>   Quản Lý Tài Khoản</a></li>
                    <li class="active"><i class="material-icons">create</i> Đổi Mật Khẩu</li>
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
                <?php if(session("error")): ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong><?php echo e(session("error")); ?></strong> ...
                    </div>
                <?php endif; ?>
                <?php if(count($errors)>0): ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <strong><?php echo e($err); ?></strong> ...
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <div class="body">
                    <form method="post" action="<?php echo e(url("admin/account/save-pas/{$user->__get("id")}")); ?>" >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        <label for="password">Mật Khẩu Cũ: </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input class="form-control" id=""  type="password" name="password_old"   placeholder="Nhập Mật Khẩu Cũ..">
                            </div>
                        </div>
                        <label for="password">Mật Khẩu Mới: </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input class="form-control" id="" value="" type="password" name="password"   placeholder="Nhập Mật Khẩu Mới..">
                            </div>
                        </div>
                        <label for="password">Nhập Lại Mật Khẩu: </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input class="form-control" id=""  type="password" name="password_confirm"   placeholder="Nhập Lại Mật Khẩu Khẩu Mới..">
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


<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/account/edit_pas.blade.php ENDPATH**/ ?>