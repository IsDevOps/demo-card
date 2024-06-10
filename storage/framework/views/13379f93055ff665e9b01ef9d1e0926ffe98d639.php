<?php
    // $profile=asset(Storage::url('uploads/avatar/'));
    $profile=\App\Models\Utility::get_file('uploads/avatar/');
?>
<?php $__env->startSection('page-title'); ?>
   <?php echo e(__('Manage All Staff')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
   <?php echo e(__('Manage All Staff')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('action-btn'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create user')): ?>
<div class="col-xl-12 col-lg-12 col-md-12 d-flex align-items-center justify-content-between justify-content-md-end" data-bs-placement="top" >  
    <a href="#" data-size="md" data-url="<?php echo e(route('users.create')); ?>" data-ajax-popup="true" data-bs-toggle="tooltip" title="<?php echo e(__('Create')); ?>" data-title="<?php echo e(__('Create New User')); ?>" class="btn btn-sm btn-primary">
        <i class="ti ti-plus"></i>
    </a>
    <?php if(Auth::user()->type == 'company'): ?>
    <a href="<?php echo e(route('userlogs.index')); ?>" class="btn btn-sm btn-primary btn-icon m-1"
        data-size="lg" data-bs-whatever="<?php echo e(__('UserlogDetail')); ?>"> <span
            class="text-white">
            <i class="ti ti-user" data-bs-toggle="tooltip" data-bs-original-title="<?php echo e(__('Userlog Detail')); ?>"></i></span>
    </a>
<?php endif; ?>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

        
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create user')): ?>
	<div class="table-responsive">
                    <table class="table" id="pc-dt-export">
                        <thead>
                            <tr>
								<th><?php echo e(__('#')); ?></th>
                                <th><?php echo e(__('Name')); ?></th>
                                <th><?php echo e(__('Email')); ?></th>
                                <th><?php echo e(__('Department')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
								<th><?php echo e(__('Created On')); ?></th>
                                <th id="ignore"><?php echo e(__('More')); ?></th>
                            </tr>
                        </thead>
						    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                           
                                <tr>
									<td><?php echo e($loop->index + 1); ?></td>
                                    <td><?php echo e($user->name); ?></td>
									<td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->type); ?></td>
									
                                    
                                    
                                    <?php if($user->is_enable_login == '0'): ?>
                                        <td><span
                                                class="badge bg-warning p-2 px-3 rounded"><?php echo e(ucFirst('Disabled')); ?></span>
                                        </td>
                                    <?php else: ?>
                                        <td><span
                                                class="badge bg-success p-2 px-3 rounded"><?php echo e(ucFirst('Active')); ?></span>
                                        </td>
                                    <?php endif; ?>
									<td><?php echo e($user->created_at); ?></td>
							
									
									
                                    <div class="row ">
												
                                        <td class="d-flex">
											<button type="button" class="btn"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="feather icon-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit user')): ?>
                                        <a href="#" class="dropdown-item user-drop" data-url="<?php echo e(route('users.edit',$user->id)); ?>" data-ajax-popup="true" data-title="<?php echo e(__('Update User')); ?>"><i class="ti ti-edit"></i><span class="ml-2"><?php echo e(__('Edit')); ?></span></a>
                                    <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('change password account')): ?>
                                        <a href="#" class="dropdown-item user-drop" data-ajax-popup="true" data-title="<?php echo e(__('Reset Password')); ?>" data-url="<?php echo e(route('user.reset',\Crypt::encrypt($user->id))); ?>"><i class="ti ti-key"></i>
                                        <span class="ml-2"><?php echo e(__('Reset Password')); ?></span></a>  
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete user')): ?>
                                        <a href="#" class="bs-pass-para dropdown-item user-drop"  data-confirm="<?php echo e(__('Are You Sure?')); ?>" data-text="<?php echo e(__('This action can not be undone. Do you want to continue?')); ?>" data-confirm-yes="delete-form-<?php echo e($user->id); ?>" title="<?php echo e(__('Delete')); ?>" data-bs-toggle="tooltip" data-bs-placement="top"><i class="ti ti-trash"></i><span class="ml-2"><?php echo e(__('Delete')); ?></span></a>
                                        <?php echo Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id],'id'=>'delete-form-'.$user->id]); ?>

                                        <?php echo Form::close(); ?> 
                                    <?php endif; ?>
                                     <?php if(\Auth::user()->type == 'company'): ?>
                                        <a href="<?php echo e(route('userlogs.index', ['month'=>'','user'=>$user->id])); ?>"
                                            class="dropdown-item user-drop"
                                            data-bs-toggle="tooltip"
                                            data-bs-original-title="<?php echo e(__('User Log')); ?>"> 
                                            <i class="ti ti-history"></i>
                                            <span class="ml-2"><?php echo e(__('Logged Details')); ?></span></a>
                                    <?php endif; ?>
                                    <?php if($user->is_enable_login == 1): ?>
                                        <a href="<?php echo e(route('users.login', \Crypt::encrypt($user->id))); ?>"
                                            class="dropdown-item user-drop">
                                            <i class="ti ti-road-sign"></i>
                                            <span class="text-danger ml-2"> <?php echo e(__('Login Disable')); ?></span>
                                        </a>
                                    <?php elseif($user->is_enable_login == 0 && $user->password == null): ?>
                                        <a href="#" data-url="<?php echo e(route('users.reset', \Crypt::encrypt($user->id))); ?>"
                                            data-ajax-popup="true" data-size="md" class="dropdown-item login_enable user-drop"
                                            data-title="<?php echo e(__('New Password')); ?>" >
                                            <i class="ti ti-road-sign"></i>
                                            <span class="text-success ml-2"> <?php echo e(__('Login Enable')); ?></span>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('users.login', \Crypt::encrypt($user->id))); ?>"
                                            class="dropdown-item user-drop">
                                            <i class="ti ti-road-sign"></i>
                                            <span class="text-success ml-2"> <?php echo e(__('Login Enable')); ?></span>
                                        </a>
                                    <?php endif; ?>
                            </div>
                                            
                                        </td>

                                    </div>

                                </tr>
                           
                        </tbody>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oseghale/Documents/ehis/demo/resources/views/user/index.blade.php ENDPATH**/ ?>