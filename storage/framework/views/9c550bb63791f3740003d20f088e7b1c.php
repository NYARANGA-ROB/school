<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'super-admin')): ?>
<div>
    <p class="text-gray-600 dark:text-gray-200 text-xs md:text-base my-2">
        <?php if(auth()->user()->school != null): ?>
            You are currently on <?php echo e(auth()->user()->school->name); ?> - <?php echo e(auth()->user()->school->address); ?>

        <?php else: ?>
            Please set a school
        <?php endif; ?>
    </p>
</div>
<?php endif; ?><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/show-set-school.blade.php ENDPATH**/ ?>