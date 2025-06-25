<div <?php echo e($attributes->merge(['class' => 'md:grid grid-cols-12'])); ?>>
    <div class="md:col-span-4">
        <h2 class="text-xl font-bold my-2"><?php echo e($title); ?></h2>
        <p class="text-sm"><?php echo e($description); ?></p>
    </div>

    <div class="md:col-span-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <?php echo e($content); ?>

            </div>
        </div>
    </div>
</div><?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/components/partials/action-section.blade.php ENDPATH**/ ?>