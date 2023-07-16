<?php $__env->startPush('script'); ?>
    <script type="text/javascript">
        function process_payment(route) {
            var url = route;
            Swal.fire({
                title: '<?php echo e(__('Are you sure?')); ?>',
                text: "<?php echo e(__('You will not be able to revert this')); ?>",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '<?php echo e(__('Yes Process It!')); ?>',
                cancelButtonText: '<?php echo e(__('Cancel')); ?>'
            }).then((confirmed) => {
                if (confirmed.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            _method: 'put'
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: url,
                    })
                        .done(function(response) {

                            Swal.fire(
                                response.title,
                                response.message,
                                response.status
                            ).then((confirmed) => {
                                if (response.url)
                                {
                                    window.location.href = response.url;
                                }
                                else
                                {
                                    location.reload();
                                }
                            });
                        })
                        .fail(function(error) {
                            Swal.fire('<?php echo e(__("Ops..!")); ?>', '<?php echo e(__('Something went wrong with ajax!')); ?>', 'error');
                        })
                }
            });
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/1008369.cloudwaysapps.com/wejycuvtrn/public_html/resources/views/admin/common/process-refund-ajax.blade.php ENDPATH**/ ?>