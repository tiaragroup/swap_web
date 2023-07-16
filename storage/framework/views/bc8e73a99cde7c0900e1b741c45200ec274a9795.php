
<?php $__env->startSection('store_front_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('admin/css/summernote-bs4.css')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('gdpr'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('GDPR')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__('Store Front')); ?></h2>
            <div id="output-status"></div>
            <div class="row">
                <?php echo $__env->make('admin.store-front.theme-options-sitebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-9">
                    <div class="card email-card">
                        <div class="card-header">
                            <h4><?php echo e(__('GDPR')); ?></h4>
                        </div>
                        <div class="card-body col-md-10 middle">
                            <form class="" id="lang">
                                <div class="form-group">
                                    <label for="name"><?php echo e(__('Language')); ?></label>
                                    <select class="form-control selectric lang" name="lang">
                                        <option value=""><?php echo e(__('Select Language')); ?></option>
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($language->locale); ?>" <?php echo e(($lang !="" ? ($language->locale == $lang ? 'selected' : '') : ($language->locale == 'en' ? 'selected' : ''))); ?>><?php echo e($language->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </form>
                            <form method="post" action="<?php echo e(route('update')); ?>">
                                <?php echo csrf_field(); ?> <?php echo method_field('put'); ?>
                                <div class="form">
                                    <div class="form-group">
                                        <label for=""><?php echo e(__('Cookies Agreement Text')); ?></label>
                                        <div class="">
                                            <textarea class="summernote-simple" name="cookies_agreement"><?php echo e(old('cookies_agreement') ? old('cookies_agreement') : settingHelper('cookies_agreement', $lang)); ?></textarea>
                                            <input type="hidden" value="<?php echo e($lang); ?>" name="site_lang" />
                                        </div>
                                    </div>
                                    <table class="table topbar-setting-switcher">
                                        <tr>
                                            <td class="no-padding-w30 coookie-marign"><?php echo e(__('Cookies Agreement')); ?></td>
                                            <td width="300">
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="" value="setting-status-change/<?php echo e('cookies_status'); ?>" class="custom-switch-input status-change" <?php echo e(settingHelper('cookies_status') == 1 ? 'checked' : ''); ?> />
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="section-title mb-4"><?php echo e(__('Terms & Conditions')); ?></div>
                                    <div class="form-group">
                                        <label for="name"><?php echo e(__('Seller Registration')); ?></label>
                                        <select class="form-control selectric" name="seller_agreement[]" multiple>
                                            <option value=""><?php echo e(__('Select Page')); ?></option>
                                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($page->link); ?>" <?php echo e(in_array($page->link,$seller_gdpr) ? 'selected' : ''); ?>><?php echo e($page->getTranslation('title',app()->getLocale())); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"><?php echo e(__('Customer Registration')); ?></label>
                                        <select class="form-control selectric" name="customer_agreement[]" multiple>
                                            <option value=""><?php echo e(__('Select Page')); ?></option>
                                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($page->link); ?>" <?php echo e(in_array($page->link,@$customer_gdpr) ? 'selected' : ''); ?>><?php echo e($page->getTranslation('title',app()->getLocale())); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="section-title mb-4"><?php echo e(__('Privacy Policy')); ?></div>
                                    <div class="form-group">
                                        <label for="name"><?php echo e(__('Privacy')); ?></label>
                                        <select class="form-control selectric" name="privacy_agreement[]" multiple>
                                            <option value=""><?php echo e(__('Select Page')); ?></option>
                                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($page->link); ?>" <?php echo e(in_array($page->link,$privacy_gdpr) ? 'selected' : ''); ?>><?php echo e($page->getTranslation('title',app()->getLocale())); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="name"><?php echo e(__('payment')); ?></label>
                                        <select class="form-control selectric" name="payment_agreement[]" multiple>
                                            <option value=""><?php echo e(__('Select Page')); ?></option>
                                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($page->link); ?>" <?php echo e(in_array($page->link,$payment_gdpr) ? 'selected' : ''); ?>><?php echo e($page->getTranslation('title',app()->getLocale())); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="text-md-right">
                                        <button class="btn btn-outline-primary" id="save-btn">
                                            <?php echo e(__('Update')); ?>

                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page-script'); ?>
    <script src="<?php echo e(static_asset('admin/js/summernote-bs4.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/1008369.cloudwaysapps.com/wejycuvtrn/public_html/resources/views/admin/store-front/gdpr.blade.php ENDPATH**/ ?>