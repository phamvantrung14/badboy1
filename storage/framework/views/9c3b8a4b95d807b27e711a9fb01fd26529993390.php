<?php $__env->startSection('head-title','New Slide'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px">
                    <li><a href="<?php echo e(route("store")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("slide")); ?>"><i class="material-icons">perm_media</i>  Quản Lý Slide</a></li>
                    <li class="active"><i class="material-icons">add_box</i> Thêm Mới Slide</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row clearfix">
        <div class="card">
            <div class="header">
                <h4>
                    THÊM SLIDE
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
            <div class="body">
                <form method="post" action="<?php echo e(route('save-slide')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("POST"); ?>
                    <label for="">Trạng Thái</label>
                    <div class="form-group">
                            <div class="demo-radio-button">
                                <input name="status" value="1" id="radio_1" type="radio" checked="">
                                <label for="radio_1">Ẩn</label>
                                <input name="status" value="2" id="radio_2" type="radio">
                                <label for="radio_2">Hiện</label>
                            </div>
                    </div>
                    <label for="">Tiêu Đề</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="text" name="slide_title"   placeholder="Nhập tên cửa hàng">
                        </div>
                    </div>
                    <label for="">Chon ảnh</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="file" name="image"   >
                        </div>
                    </div>
                    <br>
                    <button class="btn bg-cyan waves-effect" type="submit">THÊM MỚI SLIDE</button>
                </form>
            </div>
        </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/slide/new.blade.php ENDPATH**/ ?>