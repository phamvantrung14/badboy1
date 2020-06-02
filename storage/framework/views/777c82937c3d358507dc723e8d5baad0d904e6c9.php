<?php $__env->startSection('head-title','Loai Sản Phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("products")); ?>"><i class="material-icons">view_list</i>Quản Lý Sản Phẩm</a></li>
                    <li class="active"><i class="material-icons">create</i> Chinh Sửa</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row clearfix">
        <div class="card">

            <div class="header">
                <h4>
                    CẬP NHẬT SẢN PHẨM: <?php echo e($product->__get("product_name")); ?>

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
                <form method="post" action="<?php echo e(url("admin/product/update/{$product->__get("id")}")); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("PUT"); ?>
                    <label for="">Trạng Thái:</label>
                    <div class="form-group">
                        <div class="demo-radio-button">
                            <input name="status" value="1" id="radio_1" type="radio" <?php echo e(($product->__get("status")==1)? 'checked':''); ?> >
                            <label for="radio_1">Ẩn</label>
                            <input name="status" value="2" id="radio_2" type="radio" <?php echo e(($product->__get("status")==2)? 'checked':''); ?>>
                            <label for="radio_2">Hiện</label>
                        </div>
                    </div>
                    <label for="">Tên Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="text" name="product_name" value="<?php echo e($product->__get("product_name")); ?>"   placeholder="Nhập tiêu đề bài viết....">
                        </div>
                    </div>
                    <label for="">Mô tả:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea type="text"  name="product_description" class="form-control ckeditor" id="demo" placeholder="Nhập nội dung bài viết ....."><?php echo e($product->__get("product_description")); ?></textarea>
                        </div>
                    </div>
                    <label for="">Giá Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="number" value="<?php echo e($product->__get("price")); ?>" name="price"   placeholder="Nhập tiêu đề bài viết....">
                        </div>
                    </div>
                    <label for="">Giá Khuyến Mại(nếu có):</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="number" name="sale_price"  value="<?php echo e($product->__get("sale_price")); ?>"  placeholder="Nhập tiêu đề bài viết....">
                        </div>
                    </div>
                    <label for="">Thành Phần Của Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="text" name="ingredient"  value="<?php echo e($product->__get("ingredient")); ?>" placeholder="Nhập tiêu đề bài viết....">
                        </div>
                    </div>
                    <label for="">Độ Ưu Tiên Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="new" id="">
                                <option value="1" <?php echo e(($product->__get("new")==1) ? "selected" : ""); ?>>SP Mới</option>
                                <option value="2" <?php echo e(($product->__get("new")==2) ? "selected" : ""); ?>>SP Bình Thường</option>
                                <option value="3" <?php echo e(($product->__get("new")==3) ? "selected" : ""); ?>>SP Cũ</option>
                                <option value="4" <?php echo e(($product->__get("new")==4) ? "selected" : ""); ?>>Mặc Định</option>
                            </select>
                        </div>
                    </div>
                    <label for="">Loại SẢn Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="id_type" id="">
                                <?php $__currentLoopData = $type_pd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->__get("id")); ?>" <?php echo e(($product->__get("id_type"))==($value->__get("id")) ? "selected" : ""); ?> ><?php echo e($value->__get("name")); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <label for="">Chon Avatar Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="file" name="product_avatar">
                        </div>
                    </div>
                    <label for="">Chon Ảnh Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="file" multiple="multiple" name="name_image[]">
                        </div>
                    </div>
                    <br>
                    <button class="btn bg-cyan waves-effect" type="submit">Cập Nhật Sản Phẩm</button>
                </form>
            </div>
        </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/products/edit-pd.blade.php ENDPATH**/ ?>