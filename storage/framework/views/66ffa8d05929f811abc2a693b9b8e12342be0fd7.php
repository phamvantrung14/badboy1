<?php $__env->startSection('head-title','Hệ Thống Tin Tức'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px; padding-bottom: 0px">
                    <li><a href="<?php echo e(route("store")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("news")); ?>"><i class="material-icons">book</i> Quản Lý Tin Tức</a></li>
                    <li class="active"><i class="material-icons">create</i> Chỉnh Sửa Tin Tức</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row clearfix">
        <div class="card">
            <div class="header">
                <h4>
                    TIN TỨC: <?php echo e($news->__get('new_title')); ?>

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
                <form method="post" action="<?php echo e(url("admin/news/update/{$news->__get("id")}")); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("PUT"); ?>
                    <label for="">Trạng Thái:</label>
                    <div class="form-group">
                        <div class="demo-radio-button">
                            <input name="status" value="1" id="radio_1" type="radio" <?php echo e(($news->__get('status')==1)? 'checked':''); ?> >
                            <label for="radio_1">Ẩn</label>
                            <input name="status" value="2" id="radio_2" type="radio" <?php echo e(($news->__get('status')==2)? 'checked':''); ?>>
                            <label for="radio_2">Hiện</label>
                        </div>
                    </div>
                    <label for="">Tiêu Đề:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="text" name="new_title" value="<?php echo e($news->__get('new_title')); ?>"   placeholder="Nhập tiêu đề bài viết....">
                        </div>
                    </div>
                    <label for="">Nội Dung:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea type="text"  name="new_content" value="" class="form-control ckeditor" id="demo" placeholder="Nhập nội dung bài viết ....."><?php echo e($news->__get('new_content')); ?></textarea>
                        </div>
                    </div>
                    <label for="">Chon Ảnh:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id=""  type="file" name="image">
                        </div>
                    </div>
                    <br>
                    <button class="btn bg-cyan waves-effect" type="submit">CẬP NHẬT TIN TỨC</button>
                </form>
            </div>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/news/edit.blade.php ENDPATH**/ ?>