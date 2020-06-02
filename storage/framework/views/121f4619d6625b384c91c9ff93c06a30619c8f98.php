<?php $__env->startSection('head-title',"Account"); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("account")); ?>"><i class="material-icons">account_box</i>   Quản Lý Tài Khoản</a></li>
                    <li class="active"><i class="material-icons">create</i> Phân quyền</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row clearfix">
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

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
                    <form method="post" action="<?php echo e(url("admin/account/update-role/{$user->__get("id")}")); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        
                        <label for="">Phân Quyền:</label>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input name="role" value="1" id="radio_1" type="radio" <?php echo e(($user->__get("role")==1)? 'checked':''); ?>>
                                <label for="radio_1">Admin</label>
                                <input name="role" value="0" id="radio_2" type="radio" <?php echo e(($user->__get("role")==0)? 'checked':''); ?>>
                                <label for="radio_2">Thường</label>
                            </div>
                        </div>

                        <br>
                        <button class="btn bg-cyan waves-effect" type="submit">CẬP NHẬT TÀI KHOẢN</button>
                    </form>
                </div>
            </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">

        <div class="card">
            <div class="header">
                <h4>Thông Tin Tài Khoản: </h4>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover dashboard-task-infos">
                        <tbody>
                        <tr>
                            <th>Tên Tài Khoản: </th>
                            <td><?php echo e($user->__get("user_name")); ?></td>

                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td><?php echo e($user->__get("email")); ?></td>

                        </tr>
                        <tr>
                            <th>Số Điện Thoại:</th>
                            <td><?php echo e($user->__get("phone_number")); ?></td>

                        </tr>
                        <tr>
                            <th>Địa Chỉ: </th>
                            <td><?php echo e($user->__get("address")); ?></td>

                        </tr>
                        <tr>
                            <th>Quyền Hiện Tại: </th>
                            <?php if($user->__get("role")==1): ?>
                                <td><p class="btn bg-teal btn-block btn-xs waves-effect " style="width: 60%; ">Admin</p></td>
                            <?php elseif($user->__get("role")==0): ?>
                                <td><p class="btn bg-primary btn-block btn-xs waves-effect " style="width: 60%; ">Thường</p></td>
                            <?php endif; ?>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/account/phan-quyen.blade.php ENDPATH**/ ?>