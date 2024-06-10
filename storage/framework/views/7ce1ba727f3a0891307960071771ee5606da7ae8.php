<!-- Modal -->
<div class="modal fade qr-modal" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header border-0">
                <div class="modal-custom-header d-flex align-items-center justify-content-between w-100">
                    <button type="button" class="back-btn d-flex align-items-center justify-content-center" data-dismiss="modal">
                        <img src="<?php echo e(asset('custom/theme1/img/back.svg')); ?>" alt="back" class="img-fluid">
                    </button>
                    <h4 class="modal-title"><?php echo e(__('Share this card')); ?></h4>
                    <button type="button" class="logout-btn">
                        <img src="<?php echo e(asset('custom/theme1/icon/'.$color.'/signout.svg')); ?>" alt="signout" class="img-fluid">
                    </button>
                </div>
            </div>
            <div class="modal-body border-0">
                <div class="modal-body-section text-center">
                    <div class="qr-main-image">
                        <div class="qr-code-border">
                            <img src="<?php echo e(asset('custom/img/left-top.svg')); ?>" alt="left-top" class="img-fluid left-top-border">
                            <img src="<?php echo e(asset('custom/img/left-bottom.svg')); ?>" alt="left-bottom" class="img-fluid left-bottom-border">
                            <img src="<?php echo e(asset('custom/img/right-top.svg')); ?>" alt="right-top" class="img-fluid right-top-border">
                            <img src="<?php echo e(asset('custom/img/right-bottom.svg')); ?>" alt="right-bottom" class="img-fluid right-bottom-border">
                        </div>
                    <div class="qrcode"></div>
                </div>
                <div class="text">
                    
                </div>
               
                <div class="text">
                    <p class="mb-0">
                        <?php echo e(__('Or check my social channels')); ?>

                    </p>
                </div>
                <div class="social-icon-section modal-social-icon-section"><br><br>
                    <div class="text-center card-business-hours pb-20">
                        <div class="container-lg">
                            <div class="row">
                                <div class="social-icon w-100 d-flex align-items-center justify-content-center">
                                    <div class="container">
                                        <div class="row justify-content-center inputrow_socials_preview" id="inputrow_socials_preview">
                                            <?php $__currentLoopData = $social_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_key => $social_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $social_val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_key1 => $social_val1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($social_key1 != 'id'): ?>
                                                <div class="col-2 socials_<?php echo e($loop->parent->index+1); ?>" id="socials_<?php echo e($loop->parent->index+1); ?>">
                                                    <span>
                                                        <a href="<?php echo e(url($social_val1)); ?>" class="social_link_<?php echo e($loop->parent->index+1); ?>_href_preview'}}" id="social_link_<?php echo e($loop->parent->index+1); ?>_href_preview"  target="_blank">
                                                            <div class="image-icon">
                                                                <img src="<?php echo e(asset('custom/theme1/icon/'.$color.'/'.strtolower($social_key1).'.svg')); ?>" alt="<?php echo e($social_key1); ?>" class="img-fluid">
                                                            </div>
                                                        </a>
                                                    </span>
                                                </div>
                                                <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            </div>
        </div>

    </div>
</div>

    <!-- Modal -->
<div class="modal fade appointment-modal" id="appointmentModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <div class="modal-custom-header d-flex align-items-center justify-content-between w-100">
                    <h4 class="modal-title"><?php echo e(__('Make Appointment')); ?></h4>
                    <button type="button" class="back-btn d-flex align-items-center justify-content-center"
                    data-dismiss="modal">
                        <img src="<?php echo e(asset('custom/theme1/icon/'.$color.'/close.svg')); ?>" alt="back" class="img-fluid">
                    </button>
                </div>
            </div>
            <div class="modal-body px-4">
                <form class="appointment-form">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label"><?php echo e(__('Name')); ?>:</label>
                    <input type="text" name="name" placeholder="<?php echo e(__('Enter your name')); ?>" class="form-control app_name" id="recipient-name">
                    <div class="">
                        <span class="text-danger  h5 span-error-name"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label"><?php echo e(__('Email')); ?>:</label>
                   <input type="email" name="email" placeholder="<?php echo e(__('Enter your email')); ?>" class="form-control app_email" id="recipient-name">
                   <div class="">
                        <span class="text-danger  h5 span-error-email"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label"><?php echo e(__('Phone')); ?>:</label>
                   <input type="text" name="phone" placeholder="<?php echo e(__('Enter your phone no.')); ?>" class="form-control app_phone" id="recipient-name">
                   <div class="">
                        <span class="text-danger  h5 span-error-phone"></span>
                    </div>
                  </div>
                  <div class="form-btn-group">
                    <button type="button" class="btn form-btn--close" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <button type="button" class="btn form-btn--submit" id="makeappointment"><?php echo e(__('Make Appointment')); ?></button>
                    </div>
                </form>
              </div>
        </div>
    </div>
</div><?php /**PATH /home/oseghale/Documents/ehis/demo/resources/views/business/card.blade.php ENDPATH**/ ?>