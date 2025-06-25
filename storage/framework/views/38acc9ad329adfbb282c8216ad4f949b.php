<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('body'); ?>
    <?php if (isset($component)) { $__componentOriginal396e2a41cb6ae7ff61364359e933cff9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal396e2a41cb6ae7ff61364359e933cff9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.authentication-card','data' => ['class' => 'w-full md:w-11/12 lg:w-11/12 xl:w-11/12','width' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.authentication-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full md:w-11/12 lg:w-11/12 xl:w-11/12','width' => '']); ?>
        <?php if (isset($component)) { $__componentOriginalff09e6e8699271832fcff7e08ef0245f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff09e6e8699271832fcff7e08ef0245f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.display-validation-errors','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('display-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff09e6e8699271832fcff7e08ef0245f)): ?>
<?php $attributes = $__attributesOriginalff09e6e8699271832fcff7e08ef0245f; ?>
<?php unset($__attributesOriginalff09e6e8699271832fcff7e08ef0245f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff09e6e8699271832fcff7e08ef0245f)): ?>
<?php $component = $__componentOriginalff09e6e8699271832fcff7e08ef0245f; ?>
<?php unset($__componentOriginalff09e6e8699271832fcff7e08ef0245f); ?>
<?php endif; ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('registration-form', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2834095871-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <div class="py-6">
            <p>Have An Account? <a href="<?php echo e(route('login')); ?>" class="text-blue-800 mx-1"> Login </a></p>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal396e2a41cb6ae7ff61364359e933cff9)): ?>
<?php $attributes = $__attributesOriginal396e2a41cb6ae7ff61364359e933cff9; ?>
<?php unset($__attributesOriginal396e2a41cb6ae7ff61364359e933cff9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal396e2a41cb6ae7ff61364359e933cff9)): ?>
<?php $component = $__componentOriginal396e2a41cb6ae7ff61364359e933cff9; ?>
<?php unset($__componentOriginal396e2a41cb6ae7ff61364359e933cff9); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/auth/register.blade.php ENDPATH**/ ?>