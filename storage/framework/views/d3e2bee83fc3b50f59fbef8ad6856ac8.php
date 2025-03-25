<button
    <?php echo e($attributes->class(['btn'])
        ->merge(['type' => 'button'])); ?>

>
    <?php echo e($slot ?? ''); ?>

</button>
<?php /**PATH /var/www/vendor/moonshine/moonshine/src/Laravel/src/Providers/../../../UI/resources/views/components/form/button.blade.php ENDPATH**/ ?>