<?php $__env->startSection('head-title','Loai Sản Phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px; padding-bottom: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li class="active"> <i class="material-icons">account_box</i> Quản Lý Tài Khoản</li>

                </ol>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h4>
                        DANH SÁCH CÁC TÀI KHOẢN
                    </h4>












                </div>

                <?php if(session('thong_bao')): ?>
                    <div class="header">
                        <div class="alert alert-success">
                            <?php echo e(session('thong_bao')); ?>

                        </div>
                    </div>
                <?php endif; ?>

                <div class="body table-responsive">
                    <table class="table table-striped">
                        <thead class="text-center">
                        <tr>
                            <th>STT</th>
                            <th>Email</th>
                            <th>Ảnh</th>
                            <th>Phân Quyền</th>
                            <th>Ngày tạo</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr >
                                <th scope="row"><?php echo e($loop->index+1); ?></th>
                                <td><?php echo e($value->__get('email')); ?></td>
                                <td>
                                    <img  src="<?php echo e(asset($value->__get('image'))); ?>" width="80px" alt="">
                                </td>
                                <?php if($value->__get("role")==1): ?>

                                    <td><p class="btn bg-teal btn-block btn-xs waves-effect " style="width: 60%; margin-top: 5%">Admin</p></td>
                                <?php elseif($value->__get("role")==0): ?>

                                    <td><p class="btn bg-primary btn-block btn-xs waves-effect " style="width: 60%; margin-top: 5%">Thường</p></td>
                                <?php endif; ?>
                                <td><?php echo e($value->__get('created_at')); ?></td>
                                <td>
                                    <a href="<?php echo e(url("admin/account/cap-quyen/{$value->__get("id")}")); ?>" class="label bg-blue">Cấp Quyền</a>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/account/account.blade.php ENDPATH**/ ?>