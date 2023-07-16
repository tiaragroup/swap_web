
<?php $__env->startSection('title'); ?>
    <?php echo e(__('All Wallet Request')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('wallet_recharge_request'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('wallet_recharge_request'); ?>
    active
<?php $__env->stopSection(); ?>
<?php
    $s                  = isset($_GET['s']) ? $_GET['s'] : null;
    $q                  = isset($_GET['q']) ? $_GET['q'] : null;
?>
<?php $__env->startSection('main-content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title"><?php echo e(__('Wallet Request List')); ?></h2>
                    <p class="section-lead">
                        <?php echo e(__('You have total') . ' ' . $wallet_recharge_requests->total() . ' ' . __('Requests')); ?>

                    </p>
                </div>
                <?php if(addon_is_activated('offline_payment')): ?>
                    <?php if(hasPermission('offline_payment_read') || hasPermission('wallet_recharge_read')): ?>
                    <div class="buttons add-button">
                        <a href="<?php echo e(route('offline.wallet.recharge.history')); ?>" class="btn btn-icon icon-left btn-outline-primary">Show offline Request <i class="bx bx-credit-card-front "></i></a>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-sm-xs-12 col-md-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4><?php echo e(__('All Recharge Request')); ?></h4>
                            <div class="card-header-form">
                                <form class="form-inline" id="sorting">
                                    <div class="form-group">
                                        <select class="form-control selectric sorting" name="s">
                                            <option value="" selected><?php echo e(__('Filter By Status')); ?></option>
                                            <option value="pending" <?php echo e($s == 'pending' ? 'selected' : ''); ?> ><?php echo e(__('Pending Request')); ?></option>
                                            <option value="approved" <?php echo e($s == 'approved' ? 'selected' : ''); ?> ><?php echo e(__('Approved Request')); ?></option>
                                            <option value="rejected" <?php echo e($s == 'rejected' ? 'selected' : ''); ?> ><?php echo e(__('Rejected Request')); ?></option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" value="<?php echo e(@$q); ?>"
                                               placeholder="<?php echo e(__('Search')); ?>">
                                        <div class="input-group-btn">
                                            <button class="btn btn-outline-primary"><i class="bx bx-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('User')); ?></th>
                                        <th><?php echo e(__('Payment Method')); ?></th>
                                        <th><?php echo e(__('Amount')); ?></th>
                                        <th><?php echo e(__('TNX ID')); ?></th>
                                        <th><?php echo e(__('Image')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <?php if(hasPermission('recharge_request_status_update')): ?>
                                        <th><?php echo e(__('Options')); ?></th>
                                        <?php endif; ?>
                                    </tr>

                                    <?php $__currentLoopData = $wallet_recharge_requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        $user = $request->user;
                                        ?>
                                        <tr id="row_<?php echo e($request->id); ?>">
                                            <td><?php echo e($wallet_recharge_requests->firstItem() + $key); ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <figure class="avatar mr-2">
                                                        <?php if($user && $user->images != [] && is_file_exists($user->images['image_40x40'],$user->images['storage'])): ?>
                                                            <img src="<?php echo e(get_media($user->images['image_40x40'],$request->user->images['storage'])); ?>"
                                                                 alt="<?php echo e(userInfo($user,'first_name')); ?>">
                                                        <?php else: ?>
                                                            <img
                                                                src="<?php echo e(static_asset('images/default/user40x40.jpg')); ?>"
                                                                alt="<?php echo e(userInfo($user,'first_name')); ?>">
                                                        <?php endif; ?>
                                                        <?php if($user && \Illuminate\Support\Facades\Cache::has('user-is-online-' . $user->id)): ?>
                                                            <i class="avatar-presence online"></i>
                                                        <?php else: ?>
                                                            <i class="avatar-presence offline"></i>
                                                        <?php endif; ?>
                                                    </figure>
                                                    <div class="ml-1">
                                                        <a href="javascript:void(0)" class="modal-menu" data-title="<?php echo e(__('Profile')); ?>"
                                                           data-url="<?php echo e($user ? route('edit-info', ['page_name' => 'customer-profile', 'param1' => $user->id]) : ''); ?>"
                                                           data-toggle="modal" data-target="#common-modal">
                                                            <?php echo e(userInfo($user,'first_name')); ?>

                                                        </a>
                                                            <br/>
                                                        <?php if($user && \Cartalyst\Sentinel\Laravel\Facades\Activation::completed($user) == true): ?>
                                                            <i class='bx bx-check-circle text-success'></i> <a
                                                                    href="mailto:<?php echo e(userInfo($user,'email')); ?>"><?php echo e(userInfo($user,'email')); ?></a>
                                                        <?php else: ?>
                                                            <i class='bx bx-x-circle text-warning'></i> <a
                                                                    href="mailto:<?php echo e(userInfo($user,'email')); ?>"><?php echo e(userInfo($user,'email')); ?></a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo e($request->payment_method ? strtoupper(str_replace('_',' ',$request->payment_method)) : ''); ?></td>
                                            <td><?php echo e(get_price($request->amount,user_curr())); ?></td>
                                            <td><?php echo e($request->transaction_id); ?></td>
                                            <td>
                                                <?php if($request->image != [] && @is_file_exists($request->image['image_40x40'], $request->image['storage'])): ?>
                                                    <a href="<?php echo e(get_media($request->image['original_image'], $request->image['storage'])); ?>" target="_blank">
                                                        <img src="<?php echo e(get_media($request->image['image_40x40'], $request->image['storage'])); ?>"
                                                             alt="<?php echo e($request->transaction_id); ?>"
                                                             class="mr-3 rounded">
                                                    </a>
                                                <?php else: ?>
                                                    <?php echo e(__('Not Available')); ?>

                                                <?php endif; ?>
                                            </td>

                                            <td class=" <?php echo e($request->status == 'pending' ? 'text-warning' : ($request->status == 'approved' ? 'text-success' : 'text-danger')); ?>">
                                                <?php echo e(ucfirst($request->status)); ?>

                                            </td>
                                            <?php if(hasPermission('recharge_request_status_update')): ?>
                                            <td>
                                                <?php if($request->status == 'pending' || $request->status == 'rejected'): ?>
                                                <a href="javascript:void(0)"
                                                   onclick="process_payment('<?php echo e(route('admin.approved.wallet.recharge',$request->id)); ?>')"
                                                   class="btn btn-outline-primary btn-circle"
                                                   data-toggle="tooltip" title=""
                                                   data-original-title="<?php echo e(__('Approve')); ?>">
                                                    <i class="bx bx-check"></i>
                                                </a>
                                                <?php endif; ?>
                                                <?php if($request->status == 'pending' || $request->status == 'approved'): ?>
                                                <a href="javascript:void(0)"
                                                   onclick="process_payment('<?php echo e(route('admin.reject.wallet.recharge',$request->id)); ?>')"
                                                   class="btn btn-outline-danger btn-circle"
                                                   data-toggle="tooltip" title=""
                                                   data-original-title="<?php echo e(__('Reject')); ?>">
                                                    <i class="bx bx-x"></i>
                                                </a>
                                                <?php endif; ?>
                                            </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav class="d-inline-block">
                                <?php echo e($wallet_recharge_requests->appends(Request::except('page'))->links('pagination::bootstrap-4')); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.common.common-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.common.process-refund-ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(static_asset('admin/js/ajax-live-search.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/1008369.cloudwaysapps.com/wejycuvtrn/public_html/resources/views/admin/wallet/wallet-recharge-requests.blade.php ENDPATH**/ ?>