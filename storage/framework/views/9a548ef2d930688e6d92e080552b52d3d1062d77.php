<!DOCTYPE html>
<html lang="en">
    <?php echo $__env->make('admin.partials.header-assets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body class="<?php echo e(request()->route()->getName() == 'admin.pos.system' ||  request()->route()->getName() == 'seller.pos.system' ? 'sidebar-mini' : ''); ?>">
        <div id="app">
            <div class="main-wrapper">
                <?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if(Sentinel::getUser()->user_type == 'seller'): ?>
                    <?php echo $__env->make('seller.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
                <div class="main-content">
                <!-- Main Content -->
                <?php echo $__env->yieldContent('main-content'); ?>
                <!-- Main Content End -->
                </div>
                <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo $__env->make('admin.partials.footer-assets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <input type="hidden" value="<?php echo e(settingHelper('live_api_currency')); ?>" id="is_currency_api_enabled">
        <input type="hidden" value="<?php echo e(route('home')); ?>" id="url">
        <input type="hidden" value="<?php echo e(route('index')); ?>" id="assets">
        <input name="get-me" type="hidden" id="get_user_type" value="<?php echo e(Sentinel::getUser()->user_type == 'seller' ? 'seller' : 'admin'); ?>" />
        <input type="hidden" class="sure" value="<?php echo e(__('Are you sure? ')); ?>">
        <input type="hidden" class="confirm_btn" value="<?php echo e(__('yes_do_it')); ?>">
        <input type="hidden" class="product_alert_danger" value="<?php echo e(__('product_disabled')); ?>">
        <input type="hidden" class="product_alert_success" value="<?php echo e(__('product_enabled')); ?>">
        <input type="hidden" class="package_danger" value="<?php echo e(__('package_disabled')); ?>">
        <input type="hidden" class="package_success" value="<?php echo e(__('package_enabled')); ?>">
        <input type="hidden" class="package_purchase_alert" value="<?php echo e(__('package_purchase_alert')); ?>">
        <?php echo $__env->yieldContent('modal'); ?>
        <div class="overlayText d-none">
            <div>
                <img src="<?php echo e(static_asset('images/default/preloader.gif')); ?>" alt="updater">
                <p><?php echo e(__('update_text')); ?></p>
                <p><?php echo e(__('update_browser_text')); ?></p>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /home/1008369.cloudwaysapps.com/wejycuvtrn/public_html/resources/views/admin/partials/master.blade.php ENDPATH**/ ?>