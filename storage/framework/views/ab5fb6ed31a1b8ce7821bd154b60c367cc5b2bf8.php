<?php $__env->startSection('head-title','Loai Sản Phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px">
                    <li><a href="<?php echo e(route("store")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("products")); ?>"><i class="material-icons">view_list</i>Danh Sách Sản Phẩm</a></li>
                    <li class="active"><i class="material-icons">attachment</i> Chi Tiết</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

        <div class="card">
            <div class="header">
                <h4>Thông tin SP: <?php echo e($product->__get("product_name")); ?></h4>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover dashboard-task-infos">
                        <tbody>
                        <tr>
                            <th>Tên Sản Phẩm: </th>
                            <td><?php echo e($product->__get("product_name")); ?></td>

                        </tr>
                        <tr>
                            <th>Giá Bán:</th>
                            <td><?php echo e(number_format($product->__get("price"))); ?> VNĐ</td>

                        </tr>
                        <tr>
                            <th>Giá Khuyến Mại(nếu có):</th>
                            <td><?php echo e(number_format($product->__get("sale_price"))); ?> VNĐ</td>

                        </tr>
                        <tr>
                            <th>Mức Độ Ưu Tiên: </th>
                            <td><?php echo e($product->__get("new")); ?></td>

                        </tr>
                        <tr>
                            <th>Trạng Thái: </th>
                            <?php if($product->__get("status")==1): ?>
                                <td><p class="btn bg-red btn-block btn-xs waves-effect" style="width: 60%">Ẩn</p></td>
                            <?php elseif($product->__get("status")==2): ?>
                                <td><p class="btn bg-teal btn-block btn-xs waves-effect" style="width: 60%">Hiện</p></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <th>Loại Sản Phẩm: </th>
                            <td><?php echo e($product->type_product->__get("name")); ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>Ảnh Sản Phẩm</h4>
            </div>
            <div class="body">
                <div class="carousel slide" id="carousel-example-generic" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0"></li>
                        <li class="active" data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active" style="height: 255px;width: 100%">
                            <img src="<?php echo e(asset($product->__get("product_avatar"))); ?>">
                        </div>
                        <?php $__currentLoopData = $pd_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item" style="height: 255px;width: 100%">
                            <img src="<?php echo e(asset($value->__get("name_image"))); ?>">
                            <div class="carousel-caption">
                                <a href="<?php echo e(url("admin/product/check/delete-img/{$value->__get("id")}")); ?>" class="btn bg-pink btn-block btn-xs waves-effect" >Xóa Ảnh</a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" role="button" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
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
                        MÔ TẢ SẢN PHẨM
                    </h4>

                </div>
                <div class="body">
                    <p class="m-b-25">
                        <?php echo $product->__get("product_description"); ?>

                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        THÀNH PHẦN SẢN PHẨM
                    </h2>

                </div>
                <div class="body">
                    <p class="m-b-25">
                        <?php echo $product->__get("ingredient"); ?>

                    </p>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/products/check.blade.php ENDPATH**/ ?>