<?php $__env->startSection('head-title',"Store {$store->__get('store_name')}"); ?>
<?php $__env->startSection('content'); ?>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px; padding-bottom: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("store")); ?>"><i class="material-icons">store</i> Quản Lý Cửa Hàng</a></li>
                    <li class="active"><i class="material-icons">create</i> Chỉnh Sửa Store</li>

                </ol>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row clearfix">
        <div class="card">
            <div class="header">
                <h2>
                    CỬA HÀNG <?php echo e($store->__get('store_name')); ?>

                </h2>
                
                
                
                
                
                
                
                
                
                
                
                
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
                <form method="post" action="<?php echo e(url("admin/store/update/{$store->__get("id")}")); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("PUT"); ?>
                    <label for="email_address">Khu vực</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="area" id="">
                                <option value="1" <?php echo e((($store->__get("area"))==1)? 'selected':' '); ?>>Hà Nội</option>
                                <option value="2" <?php echo e((($store->__get("area"))==2)? 'selected':' '); ?>>HCM</option>
                                <option value="3" <?php echo e((($store->__get("area"))==3)? 'selected':' '); ?>>Đà Nẵng</option>
                                <option value="4" <?php echo e((($store->__get("area"))==4)? 'selected':' '); ?>>Khu vực khác</option>
                            </select>
                        </div>
                    </div>
                    <label for="password">Tên cửa hàng</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" value="<?php echo e($store->__get("store_name")); ?>" type="text" name="store_name"   placeholder="Nhập tên cửa hàng">
                        </div>
                    </div>
                    <label for="password">Địa chỉ</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" value="<?php echo e($store->__get("address")); ?>" type="text" name="address"   placeholder="Nhập địa chỉ">
                        </div>
                    </div>
                    <label for="password">SĐT</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="number" value="<?php echo e($store->__get("phone")); ?>" name="phone"   placeholder="Nhập số điện thoại cửa hàng">
                        </div>
                    </div>

                    <br>
                    <button class="btn bg-cyan waves-effect" type="submit">CẬP NHẬT CỬA HÀNG</button>
                </form>
            </div>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/store/edit.blade.php ENDPATH**/ ?>