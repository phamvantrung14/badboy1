<?php $__env->startSection('head-title','Hệ Thống Tin Tức'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("type-products")); ?>"><i class="material-icons">view_week</i>Quản Lý Loại Sản Phẩm</a></li>
                    <li class="active"><i class="material-icons">add_box</i> Thêm Mới Loại Sản Phẩm</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row clearfix">
        <div class="card">
            <div class="header">
                <h4>
                    THÊM MỚI LOẠI SẢN PHẨM
                </h4>












            </div>
            <?php if(count($errors)>0): ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <strong><?php echo e($err); ?></strong> ...
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <?php if(session('thong_bao')): ?>
                <div class="header">
                    <div class="alert alert-success">
                        <?php echo e(session('thong_bao')); ?>

                    </div>
                </div>
            <?php endif; ?>
            <div class="body">
                <form method="post" action="<?php echo e(route('save-type-pd')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("POST"); ?>
                    <label for="">Tên Loại Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="text" name="name"   placeholder="Nhập tên loại sản phẩm">
                        </div>
                    </div>
                    <label for="">Mô Tả:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea type="text"  name="description" class="form-control ckeditor" id="demo" placeholder="Nhập nội dung bài viết ....."></textarea>
                        </div>
                    </div>
                    <label for="">Chon Ảnh:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="file" name="image">
                        </div>
                    </div>
                    <br>
                    <button class="btn bg-cyan waves-effect" type="submit">THÊM MỚI LOẠI SẢN PHẨM</button>
                </form>
            </div>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/type_products/new.blade.php ENDPATH**/ ?>