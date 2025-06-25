<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['buttonLabel' => 'Actions', 'links', 'groupClass' => null,  'buttonClass' => null, 'dropdownClass' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['buttonLabel' => 'Actions', 'links', 'groupClass' => null,  'buttonClass' => null, 'dropdownClass' => null]); ?>
<?php foreach (array_filter((['buttonLabel' => 'Actions', 'links', 'groupClass' => null,  'buttonClass' => null, 'dropdownClass' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="<?php echo e($groupClass); ?> relative flex flex-col items-center justify-between" x-data="{dropdown : false}" >
    <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve(['label' => ''.e($buttonLabel).'','icon' => 'fas fa-angle-down','class' => ''.e($buttonClass).' bg-gray-500 capitalize border'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['aria-haspopup' => 'true','type' => 'button','aria-expanded' => 'false','@click' => 'dropdown = !dropdown']); ?>
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
    <div @click.outside="dropdown = false" class="<?php echo e($dropdownClass); ?> absolute top-14 p-2 min-w-[36] z-30 bg-white border dark:bg-gray-800 rounded" x-show="dropdown" style="display: none">
        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/dropdown.blade.php ENDPATH**/ ?>