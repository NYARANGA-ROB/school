<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['paths' => []]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['paths' => []]); ?>
<?php foreach (array_filter((['paths' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<ol class="capitalize my-4">
    <?php if(isset($paths)): ?>
        <i class="fa fa-home mr-2" aria-hidden="true"></i>
        <?php $__currentLoopData = $paths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!in_array('active', $path)): ?>
                <li class="breadcrumb-item inline mx-1 text-capitalize text-sm"><a class="text-blue-600 dark:text-blue-400" href="<?php echo e($path['href']); ?>"><?php echo e(__($path['text'])); ?></a></li>
            <?php else: ?>
                <li class="breadcrumb-item inline mx-1 active text-capitalize text-sm"><?php echo e(__($path['text'])); ?></li>
            <?php endif; ?>
            <?php if(!$loop->last): ?>
                <i class="fa fa-angle-right inline mx-1 text-sm" aria-hidden="true"></i>
            <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</ol><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/breadcrumbs.blade.php ENDPATH**/ ?>