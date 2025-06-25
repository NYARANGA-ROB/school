<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['backgroundColour' =>  'bg-blue-700', 'textColour' => 'text-white','title' => '', 'footer' => '', 'icon' => '', 'buttonText' => 'Delete', 'button', 'size' => 'base', 'modalButtonClass' => '']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['backgroundColour' =>  'bg-blue-700', 'textColour' => 'text-white','title' => '', 'footer' => '', 'icon' => '', 'buttonText' => 'Delete', 'button', 'size' => 'base', 'modalButtonClass' => '']); ?>
<?php foreach (array_filter((['backgroundColour' =>  'bg-blue-700', 'textColour' => 'text-white','title' => '', 'footer' => '', 'icon' => '', 'buttonText' => 'Delete', 'button', 'size' => 'base', 'modalButtonClass' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div x-data="{modal : false}" class="<?php echo e($textColour); ?>">
    
    <!--[if BLOCK]><![endif]--><?php if(isset($button)): ?>
        <?php echo e($button); ?>

    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve(['class' => ''.e($backgroundColour).' '.e($modalButtonClass).' rounded','icon' => ''.e($icon).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'modal = true']); ?>
            <?php echo e($buttonText); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $attributes = $__attributesOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__attributesOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $component = $__componentOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__componentOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <?php
        switch ($size) {
            case 'base':
                $sizeClass = "h-[60%] w-11/12 md:w-10/12 lg:w-8/12 xl:w-6/12";
                break;
            case 'lg':
                $sizeClass = "h-[90%] w-11/12 lg:w-9/12";
            default:
                $sizeClass = "h-[90%] w-11/12 lg:w-9/12";
                break;
        }
    ?>

    <div class=" w-screen h-screen fixed inset-0 z-50 bg-black bg-opacity-70 flex items-center justify-center" @click="modal = false" x-show="modal" style="display: none" x-transition <?php echo e($attributes); ?>>
        <div class="<?php echo e($sizeClass); ?> flex justify-between flex-col bg-white dark:bg-gray-900 rounded-xl border" @click.stop>
            <div class="<?php echo e($backgroundColour); ?> h-16 md:h-20 rounded-t-xl flex justify-between  items-center p-4">
                <div class="flex gap-4 overflow-y-scroll beautify-scrollbar">
                    <i class="<?php echo e($icon); ?> text-2xl" aria-hidden="true" ></i>
                    <h4 class="text-2xl font-semibold"><?php echo e($title); ?></h4>
                </div>
                <i class="fas fa-x text-lg mx-2 cursor-pointer rounded" @click="modal = false" aria-role="button" aria-hidden="true">
                    <p class="sr-only">Close Modal</p>
                </i>
            </div>
            <div class="flex justify-center items-center flex-col overflow-scroll beautify-scrollbar text-black dark:text-white">
                <?php echo e($slot); ?>

            </div>
            <div class="border-t h-16 md:h-20 flex justify-between items-center p-4">
                <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve(['label' => 'Close','class' => 'bg-gray-600 text-white'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'modal = false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $attributes = $__attributesOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__attributesOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $component = $__componentOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__componentOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
                <div>
                    <?php echo e($footer); ?>

                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/modal.blade.php ENDPATH**/ ?>