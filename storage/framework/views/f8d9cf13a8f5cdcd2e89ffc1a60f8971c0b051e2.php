<?php $__env->startSection('head-title','Slide'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px">
                    <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Slide</a></li>
                    <li class="active"><i class="material-icons">attachment</i> Danh Sách Slide</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h4>
                        TRẠNG THÁI
                    </h4>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="javascript:void(0);" data-toggle="dropdown">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a class=" waves-effect waves-block" href="<?php echo e(route('slide')); ?>">Tất cả</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                            <form action="<?php echo e(route("check-status-an")); ?>">
                                <input type="hidden" name="index_status" value="1">
                                <button class="btn bg-red btn-lg btn-block waves-effect" type="submit">Ẩn <span class="badge"><?php echo e(count($slide_an)); ?></span></button>
                            </form>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                            <form action="<?php echo e(route("check-status-hien")); ?>">
                                <input type="hidden" name="index_status" value="2">
                                <button class="btn bg-teal btn-lg btn-block waves-effect" type="submit">Hiện <span class="badge"><?php echo e(count($slide_hien)); ?></span></button>
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
                        DANH SÁCH CÁC SILDE
                    </h4>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="javascript:void(0);" data-toggle="dropdown">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a class=" waves-effect waves-block" href="<?php echo e(route('new-slide')); ?>">Thêm mới slide</a></li>

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
                        <thead class="text-center">
                        <tr>
                            <th>STT</th>
                            <th>Tiêu Đề</th>
                            <th>Ảnh</th>
                            <th>Trạng Thái</th>
                            <th>Ngày tạo</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr >
                                <th scope="row"><?php echo e($loop->index+1); ?></th>
                                <td><?php echo e($value->__get('slide_title')); ?></td>
                                <td>
                                    <img  src="<?php echo e(asset('upload/slide')); ?>/<?php echo e($value->__get('image')); ?>" width="80px" alt="">
                                </td>
                                <?php if($value->__get('status')==1): ?>
                                    <td><p class="btn bg-red btn-block btn-xs waves-effect" style="width: 60%">Ẩn</p></td>
                                <?php elseif($value->__get('status')==2): ?>
                                    <td><p class="btn bg-teal btn-block btn-xs waves-effect" style="width: 60%">Hiện</p></td>

                                <?php endif; ?>
                                <td><?php echo e($value->__get('created_at')); ?></td>
                                <td>
                                    <a href="<?php echo e(url("admin/slide/check/{$value->__get("id")}")); ?>" class="label bg-green">Check</a>
                                    <a href="<?php echo e(url("admin/slide/edit/{$value->__get("id")}")); ?>" class="label bg-blue">Edit</a>
                                    <a href="<?php echo e(url("admin/slide/delete/{$value->__get("id")}")); ?>" class="label bg-red">Delete</a>
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

<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/slide/slide.blade.php ENDPATH**/ ?>