<?php $__env->startSection('content'); ?>
<?php
    $logo=asset(Storage::url('uploads/logo/'));
    $company_logo=Utility::getValByName('company_logo');
?>
<div class="w-100">
            <div class="row justify-content-between justify-content-center">
              <div class="col-sm-8 col-lg-4">
                <div class="row justify-content-center mb-3">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e($logo.'/logo.png'); ?>" class="auth-logo" width="300">
                    </a>
                </div>
                <div class="card shadow zindex-100 mb-0">
                  <div class="card-body px-md-5 py-5">
                      <h4 class="text-primary font-weight-normal mb-1"><strong><?php echo e(__('Reset Password')); ?></strong></h4>
                      <form action="<?php echo e(route('password.update')); ?>" method="POST" class="pt-3 text-left needs-validation" novalidate="">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">
                        <label class="d-block position-relative mb-3">
                          <p class="text-sm mb-2"><?php echo e(__('E-Mail Address')); ?></p>
                          <input type="email" id="email" name="email"  class="text-sm rounded-6 w-100 py-3 px-3 border text-grayDark <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($email ?? old('email')); ?>" required autofocus>
                          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <small><?php echo e($message); ?></small>
                            </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </label>
                        <label class="d-block position-relative mb-3">
                          <p class="text-sm mb-2"><?php echo e(__('Password')); ?></p>
                          <input type="password" id="password" name="password"  class="text-sm rounded-6 w-100 py-3 px-3 border text-grayDark <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="new-password">
                          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <small><?php echo e($message); ?></small>
                            </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </label>
                        <label class="d-block position-relative mb-3">
                          <p class="text-sm mb-2"><?php echo e(__('Confirm Password')); ?></p>
                          <input type="password" id="password" name="password_confirmation"  class="text-sm rounded-6 w-100 py-3 px-3 border text-grayDark <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="new-password">
                          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <small><?php echo e($message); ?></small>
                            </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </label>            
                        <button type="submit" class=" btn btn-primary px-4 py-2 text-xs"><span class="d-block py-1"><?php echo e(__('Reset Password')); ?></span></button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>                  
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oseghale/Documents/ehis/demo/resources/views/auth/reset-password.blade.php ENDPATH**/ ?>