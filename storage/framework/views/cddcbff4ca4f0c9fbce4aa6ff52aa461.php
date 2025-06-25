<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['errorBag' => 'default']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['errorBag' => 'default']); ?>
<?php foreach (array_filter((['errorBag' => 'default']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="w-full my-3" x-data="{open: true}" x-show="open" x-transition wire:ignore>
    <!--[if BLOCK]><![endif]--><?php if($errors->$errorBag->any()): ?>
        <div class=" bg-red-100 rounded-md dark:bg-red-600 dark:text-white text-red-900 border-red-300 border w-full">
            <div class="py-2 px-4 text-black dark:text-white flex justify-end">
                <button type="button"  @click="open = false">
                    <i class="fa fa-x" aria-hidden="true"></i>
                </button>
            </div>
            <ul class="pb-6 px-6">
                <p class="font-bold text-lg"> Whoops! Something went wrong.</p>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="pl-6">
                        <li class=" list-disc"><?php echo e($error); ?></li> 
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </ul>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/display-validation-errors.blade.php ENDPATH**/ ?>