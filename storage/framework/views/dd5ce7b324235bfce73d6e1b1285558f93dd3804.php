<?php $__env->startComponent('mail::message'); ?>
# Welcome <?php echo e($data['title']); ?>


The body of your message. <?php echo e($data['message']); ?>


<?php $__env->startComponent('mail::button', ['url' => $data['link']]); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH D:\wamp64\www\l5auth\resources\views/emails/welcome.blade.php ENDPATH**/ ?>