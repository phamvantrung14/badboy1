<?php $__env->startSection('head-title','Hệ Thống Store'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px; padding-bottom: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>

                    <li class="active"><i class="material-icons">store</i> Quản Lý Store</li>

                </ol>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h4>
                        KHU VỰC
                    </h4>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="javascript:void(0);" data-toggle="dropdown">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a class=" waves-effect waves-block" href="<?php echo e(route('store')); ?>">Tất cả</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <form action="<?php echo e(route('kv-hanoi')); ?>">
                                <input type="hidden" name="area" value="1">
                                    <button class="btn btn-success btn-lg btn-block waves-effect" type="submit">HÀ NỘI <span class="badge"><?php echo e(count($hanoi)); ?></span></button>
                            </form>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <form action="<?php echo e(route('kv-danang')); ?>">
                                <input type="hidden" name="area" value="3">
                                    <button class="btn btn-primary btn-lg btn-block waves-effect" type="submit">ĐÀ NẴNG <span class="badge"><?php echo e(count($danang)); ?></span></button>
                            </form>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <form action="<?php echo e(route('kv-hcm')); ?>">
                                <input type="hidden" name="area" value="2">
                                <button class="btn btn-danger btn-lg btn-block waves-effect" type="submit">TP HCM <span class="badge"><?php echo e(count($hcm)); ?></span></button>
                            </form>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <form action="<?php echo e(route('kv-khac')); ?>">
                                <input type="hidden" name="area" value="4">
                                <button class="btn btn-warning btn-lg btn-block waves-effect" type="submit">KV KHÁC <span class="badge"><?php echo e(count($kvk)); ?></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h4>
                        DANH SÁCH HỆ THỐNG CỬA HÀNG

                    </h4>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="javascript:void(0);" data-toggle="dropdown">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a class=" waves-effect waves-block" href="<?php echo e(url('admin/store')); ?>/new">Thêm mới cửa hàng</a></li>

                            </ul>
                        </li>
                    </ul>

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
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Khu vực</th>
                            <th>Tên cửa hàng</th>
                            <th>Địa chỉ</th>
                            <th>SĐT</th>
                            <th>Tác vụ</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->index+1); ?></th>
                            <?php if($value->__get('area')==1): ?>
                            <td>Hà nội</td>
                            <?php elseif($value->__get('area')==2): ?>
                            <td>HCM</td>
                            <?php elseif($value->__get('area')==3): ?>
                                <td>Đà Nẵng</td>
                            <?php else: ?>
                                <td>Khu vực khác</td>
                            <?php endif; ?>
                            <td><?php echo e($value->__get('store_name')); ?></td>
                            <td><?php echo e($value->__get('address')); ?></td>
                            <td><?php echo e($value->__get('phone')); ?></td>
                            <td>
                                <a href="<?php echo e(url("admin/store/edit/{$value->__get("id")}")); ?>" class="label bg-blue">Edit</a>
                                <a href="<?php echo e(url("admin/store/delete/{$value->__get("id")}")); ?>" class="label bg-red">Delete</a>
                            </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <?php echo $store->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/store/store.blade.php ENDPATH**/ ?>