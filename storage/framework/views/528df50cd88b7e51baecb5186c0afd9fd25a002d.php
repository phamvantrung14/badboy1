<?php $__env->startSection('head-title','Hệ Thống Store'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <ol class="breadcrumb breadcrumb-col-teal" style="margin: 0px; padding-bottom: 0px">
                    <li><a href="<?php echo e(route("admin")); ?>"><i class="material-icons">home</i> Home</a></li>
                    <li class="active"><i class="material-icons">book</i>Quản Lý Tin Tức</li>

                </ol>
            </div>
        </div>
    </div>
    <div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>QUẢN LÝ TIN TỨC</h4>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="javascript:void(0);" data-toggle="dropdown">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a class=" waves-effect waves-block" href="<?php echo e(route('new-news')); ?>">Thêm Mới Tin Tức</a></li>

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
            <div class="body">
                <div class="table-responsive">
                    <div class="dataTables_wrapper form-inline dt-bootstrap" id="DataTables_Table_0_wrapper">

                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr role="row">
                                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 40px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">STT</th>

                                        <th tabindex="0" class="sorting_asc" aria-controls="DataTables_Table_0" style="width: 230px;" aria-label="Name: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">Tiêu Đề</th>
                                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 100px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Trạng Thái</th>
                                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 100px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Ảnh</th>
                                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 90px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">Created_at</th>
                                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 90px;" aria-label="Start date: activate to sort column ascending" rowspan="1" colspan="1">Updated_at</th>
                                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 150px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">Tác Vụ</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">STT</th>
                                        <th rowspan="1" colspan="1">Tiêu Đề</th>
                                        <th rowspan="1" colspan="1">Trạng Thái</th>
                                        <th rowspan="1" colspan="1">Ảnh</th>
                                        <th rowspan="1" colspan="1">Created_at</th>
                                        <th rowspan="1" colspan="1">Updated_at</th>
                                        <th rowspan="1" colspan="1">Tác Vụ</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="odd" role="row">
                                        <td class="sorting_1"><?php echo e($loop->index+1); ?></td>
                                        <td ><?php echo e($value->__get("new_title")); ?></td>
                                        <?php if($value->__get("status")==1): ?>
                                        <td><p class="btn bg-red btn-block btn-xs waves-effect " style="width: 60%; margin-top: 5%">Ẩn</p></td>
                                        <?php elseif($value->__get("status")==2): ?>
                                        <td><p class="btn bg-teal btn-block btn-xs waves-effect" style="width: 60%; margin-top: 5%">Hiện</p></td>
                                        <?php endif; ?>
                                        <td><img src="<?php echo e(asset($value->__get('image'))); ?>" width="80px" alt="">
                                            </td>
                                        <td><?php echo e($value->__get("created_at")); ?></td>
                                        <td><?php echo e($value->__get("updated_at")); ?></td>
                                        <td>
                                            <a href="<?php echo e(url("admin/news/chi-tiet/{$value->__get("id")}")); ?>" class="label bg-green">Check</a>
                                            <a href="<?php echo e(url("admin/news/edit/{$value->__get("id")}")); ?>" class="label bg-blue">Edit</a>
                                            <a href="<?php echo e(url("admin/news/delete/{$value->__get("id")}")); ?>" class="label bg-red">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">

                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <?php echo $news->links(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/news/news.blade.php ENDPATH**/ ?>