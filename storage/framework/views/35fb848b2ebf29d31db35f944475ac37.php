<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['class' => '', 'width' => 'w-10/12 md:w-8/12 lg:w-5/12 xl:w-4/12', 'height' => 'min-h-[20%]']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['class' => '', 'width' => 'w-10/12 md:w-8/12 lg:w-5/12 xl:w-4/12', 'height' => 'min-h-[20%]']); ?>
<?php foreach (array_filter((['class' => '', 'width' => 'w-10/12 md:w-8/12 lg:w-5/12 xl:w-4/12', 'height' => 'min-h-[20%]']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="flex flex-cols justify-center items-center my-12 flex-col">
    <img src="<?php echo e(@asset(config('app.logo'))); ?>" alt="" class="rounded-full w-28 h-28 border border-gray-200 shadow-lg my-4">
    <div class="<?php echo e($class); ?> <?php echo e($width); ?> <?php echo e($height); ?>">
        <div class="p-3 w-full flex flex-col justify-center items-center bg-white border border-gray-300 rounded">
            <?php echo e($slot); ?>

        </div>
        <div class="my-3">
            <?php echo e($footer ?? null); ?>

        </div>
    </div>
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/partials/authentication-card.blade.php ENDPATH**/ ?>