<?php $__env->startSection('head-title','Loai Sản Phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="<?php echo e(route("products")); ?>"><i class="material-icons">view_list</i>Danh Sách Sản Phẩm</a></li>
                    <li class="active"><i class="material-icons">add_box</i> Thêm Mới Sản Phẩm</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row clearfix">
        <div class="card">
            <div class="header">
                <h4>
                    THÊM MỚI SẢN PHẨM
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
                <form method="post" action="<?php echo e(route('save-products')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("POST"); ?>
                    <label for="">Trạng Thái:</label>
                    <div class="form-group">
                        <div class="demo-radio-button">
                            <input name="status" value="1" id="radio_1" type="radio" checked="">
                            <label for="radio_1">Ẩn</label>
                            <input name="status" value="2" id="radio_2" type="radio">
                            <label for="radio_2">Hiện</label>
                        </div>
                    </div>
                    <label for="">Tên Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="text" name="product_name"   placeholder="Nhập tiêu đề bài viết....">
                        </div>
                    </div>
                    <label for="">Mô tả:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea type="text"  name="product_description" class="form-control ckeditor" id="demo" placeholder="Nhập nội dung bài viết ....."></textarea>
                        </div>
                    </div>
                    <label for="">Giá Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="number" name="price"   placeholder="Nhập tiêu đề bài viết....">
                        </div>
                    </div>
                    <label for="">Giá Khuyến Mại(nếu có):</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="number" name="sale_price"   placeholder="Nhập tiêu đề bài viết....">
                        </div>
                    </div>
                    <label for="">Thành Phần Của Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea type="text"  name="ingredient" class="form-control ckeditor" id="demo" placeholder="Nhập Thành Phần Của sản Phẩm ....."></textarea>

                        </div>
                    </div>
                    <label for="">Độ Ưu Tiên Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="new" id="">
                                <option value="4">Mặc Định</option>
                                <option value="1">SP Mới</option>
                                <option value="2">SP Bình Thường</option>
                                <option value="3">SP Cũ</option>
                            </select>
                        </div>
                    </div>
                    <label for="">Loại SẢn Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="id_type" id="">
                                <?php $__currentLoopData = $type_pd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->__get("id")); ?>"><?php echo e($value->__get("name")); ?></option>
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
                    <label for="">Thêm Ảnh Sản Phẩm:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" id="" type="file" multiple="multiple" name="name_image[]">
                        </div>
                    </div>
                    <br>
                    <button class="btn bg-cyan waves-effect" type="submit">Thêm Sản Phẩm</button>
                </form>
            </div>
        </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/products/new.blade.php ENDPATH**/ ?>