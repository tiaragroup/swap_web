<?php if(Session::has('info')): ?>
    <script type="text/javascript">
        "use strict";
        $(document).ready(function () {
            toast.info({
                title: "<?php echo e(__('Info')); ?>",
                message: '<?php echo e(Session::get('info')); ?>',
                position: 'bottomRight'
            });
            toastr.clear();
            return false;
        });
    </script>
<?php elseif(Session::has('success')): ?>
    <script type="text/javascript">
        "use strict";
        $(document).ready(function () {
            toast.success({
                title: "<?php echo e(__('Success')); ?>",
                message: '<?php echo e(Session::get('success')); ?>',
                position: 'bottomRight'
            });
            toastr.clear();
            return false;
        });
    </script>
<?php elseif(Session::has('warning')): ?>
    <script type="text/javascript">
        "use strict";
        $(document).ready(function () {
            toast.warning({
                title: "<?php echo e(__('Warning')); ?>",
                message: '<?php echo e(Session::get('warning')); ?>',
                position: 'bottomRight'
            });
            toastr.clear();
            return false;
        });
    </script>
<?php elseif(Session::has('error')): ?>
    <script type="text/javascript">
        "use strict";
        $(document).ready(function () {
            toast.error({
                title: "<?php echo e(__('Error')); ?>",
                message: '<?php echo e(Session::get('error')); ?>',
                position: 'bottomRight'
            });
            toastr.clear();
            return false;
        });
    </script>
<?php endif; ?>
<?php /**PATH /home/1008369.cloudwaysapps.com/wejycuvtrn/public_html/resources/views/admin/partials/message.blade.php ENDPATH**/ ?>