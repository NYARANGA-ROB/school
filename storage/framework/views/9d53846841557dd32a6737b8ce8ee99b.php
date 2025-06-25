<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['submit']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['submit']); ?>
<?php foreach (array_filter((['submit']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => 'md:grid grid-rows-1 grid-cols-12 gap-2'])); ?>>
    <div class="col-span-4">
        <h2 class="text-xl font-bold my-2"><?php echo e($title); ?></h2>
        <p class="text-sm"><?php echo e($description); ?></p>
    </div>
    <div class="col-span-8 card shadow-sm">
        <form wire:submit="<?php echo e($submit); ?>">
            <div class="card-body">
            <?php echo e($form); ?>

            </div>

            <!--[if BLOCK]><![endif]--><?php if(isset($actions)): ?>
                <div class="border-t bg-slate-100 dark:bg-gray-800 px-3 flex justify-end ">
                    <?php echo e($actions); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </form>
    </div>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/partials/form-section.blade.php ENDPATH**/ ?>