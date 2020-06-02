<?php $__env->startSection('head-title','Chi tiết tin tức'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px; padding-bottom: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("news")); ?>"><i class="material-icons">book</i>Quản Lý Tin Tức</a></li>
                    <li class="active"><i class="material-icons">attachment</i>Chi Tiết Tin Tức</li>

                </ol>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h4>
                        ẢNH TIN TỨC
                    </h4>
                </div>
                <div class="body">
                    <img src="<?php echo e(asset($new->__get("image"))); ?>" width="100%" alt="">

                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h4>
                        NỘI DUNG
                    </h4>
                </div>
                <div class="body">
                    <?php echo $new->__get("new_content"); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/news/detail.blade.php ENDPATH**/ ?>