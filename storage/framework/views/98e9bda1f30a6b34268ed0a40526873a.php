<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['on']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['on']); ?>
<?php foreach (array_filter((['on']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="fixed flex flex-col items-end top-0 right-0 w-screen lg:w-4/12">
    <div class="bg-green-600 p-3 text-white rounded w-full" role="alert" x-data="{ shown: false, timeout: null }"
        x-init="window.Livewire.find('<?php echo e($_instance->getId()); ?>').on('<?php echo e($on); ?>', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 5000);  })"
        x-show.transition.opacity.out.duration.1500ms="shown"
        style="display: none;"
            <?php echo e($attributes->merge(['class' => 'small'])); ?>>
        <div class="alert-body">
            <?php echo e($slot->isEmpty() ? 'Saved.' : $slot); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/action-message.blade.php ENDPATH**/ ?>