<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['colour' => 'bg-red-500', 'title', 'icon' => 'fa fa-ban','stackIcons' => [] , 'class' => '', 'id' => 'alert', 'timeout' => '5000', 'show' => true]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['colour' => 'bg-red-500', 'title', 'icon' => 'fa fa-ban','stackIcons' => [] , 'class' => '', 'id' => 'alert', 'timeout' => '5000', 'show' => true]); ?>
<?php foreach (array_filter((['colour' => 'bg-red-500', 'title', 'icon' => 'fa fa-ban','stackIcons' => [] , 'class' => '', 'id' => 'alert', 'timeout' => '5000', 'show' => true]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(["$colour $class p-3 text-white rounded w-full"]); ?>" aria-role="alert" x-data="{'showAlert' : <?php echo e($show); ?>}" x-show="showAlert" x-transition id="<?php echo e($id); ?>" <?php echo e($attributes); ?> style="display:none">
    <div class="flex gap-3 justify-between">
        <div class="flex gap-3 items-center">
            <!--[if BLOCK]><![endif]--><?php if(!empty($stackIcons)): ?>
                <span class="fa-stack">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $stackIcons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stackIcon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <i class="<?php echo e($stackIcon); ?> fa-stack-<?php echo e($loop->iteration); ?>x"></i>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </span>
            <?php else: ?>
                <i class="text-xl <?php echo e($icon); ?>"></i>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <p class="text-xl">
                <?php echo e($title); ?>

            </p>
        </div>
        <!--[if BLOCK]><![endif]--><?php if($attributes->get('dismissOnTimeout') == true): ?>
            <span x-init="setTimeout(() => { showAlert = false }, <?php echo e($timeout); ?>);"></span>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        
        <div>
            <i class="fas fa-x text-lg mx-2 cursor-pointer" aria-role="button" aria-hidden="true" @click="showAlert = false">
                <p class="sr-only">Close Alert</p>
            </i>
        </div>
    </div>
    <div class="p-3">
        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/alert.blade.php ENDPATH**/ ?>