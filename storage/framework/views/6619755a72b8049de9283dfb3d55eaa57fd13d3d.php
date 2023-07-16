
<?php $__env->startSection('chat-messenger'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('chat-messenger'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Chat Messenger')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('Chat Messenger')); ?></h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                        <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('chat_messenger') == '' || old('chat_messenger') == 'facebook' ? 'active' : ''); ?>" id="facebook-tab" data-toggle="tab" href="#facebook" role="tab" aria-controls="contact"aria-selected="false"><?php echo e(__('Facebook Messenger')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(old('chat_messenger') == 'tawk' ? 'active' : ''); ?>" id="tawk-tab" data-toggle="tab"  href="#tawk" role="tab" aria-controls="contact"aria-selected="false"><?php echo e(__('Tawk Messenger')); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="tab-content no-padding" id="myTab2Content">
                        <div class="tab-pane fade <?php echo e(old('chat_messenger') == '' || old('chat_messenger') == 'facebook' ? 'show active' : ''); ?>" id="facebook" role="tabpane1" aria-labelledby="facebook-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Facebook Messenger')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <?php if(hasPermission('chat_messenger_update')): ?>
                                    <form action="<?php echo e(route('chat.messenger.update')); ?>" method="post"  enctype="multipart/form-data">
                                        <?php echo method_field('put'); ?>
                                        <?php echo csrf_field(); ?>
                                    <?php endif; ?>
                                        <div class="form-group">
                                            <label class="custom-switch mt-2 <?php echo e(hasPermission('chat_messenger_update') ? '' : 'cursor-not-allowed'); ?>">
                                                <input type="checkbox"
                                                       name="is_facebook_messenger_activated"
                                                       <?php echo e(hasPermission('chat_messenger_update') ? '' : 'disabled'); ?>

                                                       class="custom-switch-input " <?php echo e(settingHelper('is_facebook_messenger_activated') == 1 ? 'checked' : ''); ?> />
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="facebook_page_id"><?php echo e(__('Facebook Page ID ')); ?></label>
                                            <input type="hidden" name="chat_messenger"  value="facebook">
                                            <input type="text" class="form-control" name="facebook_page_id" id="facebook_page_id" value="<?php echo e(old('facebook_page_id') ? old('facebook_page_id') : settingHelper('facebook_page_id')); ?>" placeholder="<?php echo e(__('Facebook Page ID')); ?>">
                                            <?php if($errors->has('facebook_page_id')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('facebook_page_id')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="facebook_messenger_color"><?php echo e(__('Chat Widget Color')); ?>*</label>
                                            <div class="input-group colorpickerinput">
                                                <input type="text" class="form-control" name="facebook_messenger_color" value="<?php echo e(old('facebook_messenger_color') ? old('facebook_messenger_color') : settingHelper('facebook_messenger_color')); ?>" id="facebook_messenger_color" placeholder="<?php echo e(__('Chat Widget Color')); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class='bx bxs-color-fill' ></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if($errors->has('facebook_messenger_color')): ?>
                                                <div class="invalid-feedback">
                                                    <p><?php echo e($errors->first('facebook_messenger_color')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(hasPermission('chat_messenger_update')): ?>
                                        <div class="text-md-right">
                                            <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                        <?php endif; ?>
                                    <?php if(hasPermission('chat_messenger_update')): ?>
                                     </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php echo e(old('chat_messenger') == 'tawk' ? 'show active' : ''); ?>" id="tawk" role="tabpane2" aria-labelledby="tawk-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e(__('Tawk Messenger Setting')); ?></h4>
                                </div>
                                <div class="card-body col-md-10 middle">
                                    <?php if(hasPermission('chat_messenger_update')): ?>
                                    <form action="<?php echo e(route('chat.messenger.update')); ?>" method="post"  enctype="multipart/form-data">
                                        <?php echo method_field('put'); ?>
                                        <?php echo csrf_field(); ?>
                                    <?php endif; ?>
                                        <div class="form-group">
                                            <label class="custom-switch mt-2 <?php echo e(hasPermission('chat_messenger_update') ? '' : 'cursor-not-allowed'); ?>">
                                                <input type="checkbox"
                                                       name="is_tawk_messenger_activated"
                                                       <?php echo e(hasPermission('chat_messenger_update') ? '' : 'disabled'); ?>

                                                       class="custom-switch-input " <?php echo e(settingHelper('is_tawk_messenger_activated') == 1 ? 'checked' : ''); ?> />
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description"><?php echo e(__('Activate')); ?></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="tawk_property_id"><?php echo e(__('Tawk Property ID ')); ?></label>
                                            <input type="hidden" name="chat_messenger"  value="tawk">
                                            <input type="text" class="form-control" name="tawk_property_id" id="tawk_property_id" value="<?php echo e(old('tawk_property_id') ? old('tawk_property_id') : settingHelper('tawk_property_id')); ?>" placeholder="<?php echo e(__('Tawk Property ID')); ?>">
                                            <?php if($errors->has('tawk_property_id')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('tawk_property_id')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="tawk_widget_id"><?php echo e(__('Widget ID')); ?></label>
                                            <input type="text" class="form-control" name="tawk_widget_id" id="tawk_widget_id" value="<?php echo e(old('tawk_widget_id') ? old('tawk_widget_id') : settingHelper('tawk_widget_id')); ?>" placeholder="<?php echo e(__('Widget ID')); ?>">
                                            <?php if($errors->has('tawk_widget_id')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('tawk_widget_id')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <?php if(hasPermission('chat_messenger_update')): ?>
                                        <div class="text-md-right">
                                            <button class="btn btn-outline-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                        <?php endif; ?>
                                    <?php if(hasPermission('chat_messenger_update')): ?>
                                     </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/1008369.cloudwaysapps.com/wejycuvtrn/public_html/resources/views/admin/chat-messenger/index.blade.php ENDPATH**/ ?>