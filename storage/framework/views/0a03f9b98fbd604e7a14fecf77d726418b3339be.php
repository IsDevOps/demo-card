<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Permission')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Permission')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Permission')); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('action-btn'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create permission')): ?>
    <div class="col-xl-12 col-lg-12 col-md-12 d-flex align-items-center justify-content-between justify-content-md-end"
    data-bs-placement="top">
    <a href="#" data-size="md" data-url="<?php echo e(route('permissions.create')); ?>" data-ajax-popup="true" data-bs-toggle="tooltip" title="<?php echo e(__('Create')); ?>" data-title="<?php echo e(__('Create Permission')); ?>" class="btn btn-sm btn-primary">
        <i class="ti ti-plus"></i>
    </a>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-container">
                            <table class="table table-striped table-bordered table-hover" id="dataTable">
                                <thead>
                                <tr>
                                    <th> <?php echo e(__('Permissions')); ?></th>
                                    <th class="text-right" width="200px"> <?php echo e(__('Action')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($permission->name); ?></td>
                                        <td class="action">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit permission')): ?>
                                            <div class="action-btn bg-info  ms-2">
                                                <a href="#" class="mx-3 btn btn-sm d-inline-flex align-items-center" data-toggle="modal" data-target="#commonModal" data-ajax-popup="true" data-size="md" data-url="<?php echo e(route('permissions.edit',$permission->id)); ?>" data-title="<?php echo e(__('Permission Edit')); ?>" data-bs-toggle="tooltip" data-bs-original-title="<?php echo e(__('Permission Edit')); ?>"> <span class="text-white"><i
                                                    class="ti ti-edit text-white    "></i></span></a>
                                            </div> 
                                            <?php endif; ?> 
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete permission')): ?>
                                            <div class="action-btn bg-danger ms-2">
                                                <a href="#"
                                                    class="bs-pass-para mx-3 btn btn-sm d-inline-flex align-items-center"
                                                    data-confirm="<?php echo e(__('Are You Sure?')); ?>"
                                                    data-text="<?php echo e(__('This action can not be undone. Do you want to continue?')); ?>"
                                                    data-confirm-yes="delete-form-<?php echo e($permission->id); ?>"
                                                    title="<?php echo e(__('Delete')); ?>" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"><span class="text-white"><i
                                                            class="ti ti-trash"></i></span></a>
                                            </div>
                                            <?php echo Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id],'id'=>'delete-form-'.$permission->id]); ?>

                                            <?php echo Form::close(); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oseghale/Documents/ehis/demo/resources/views/permission/index.blade.php ENDPATH**/ ?>