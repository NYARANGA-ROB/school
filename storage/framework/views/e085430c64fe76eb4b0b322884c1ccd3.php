<div class="card">
    <div class="card-header">
        <h2 class="card-title">Students list</h2>
    </div>
    <div class="card-body">
        <div class="py-3">
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
        </div>
        <?php if(! \Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', ['parent', 'student'])): ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\User::class,'uniqueId' => 'students-list-table','filters' => [['name' => 'students'], ['name' => 'inSchool'], ['name' => 'orderBy' , 'arguments' => ['name']], ['name' => 'has', 'arguments' => ['StudentRecord']], ['name' => 'with' , 'arguments' => ['studentRecord','studentRecord.section', 'studentRecord.myClass']]],'columns' => [
                ['type' => 'image', 'property' => 'profile_photo_url'] , 
                ['property' => 'name'] , 
                ['property' => 'email'] , 
                ['property' => 'admission_number' ,'relation' => 'studentRecord'] , 
                ['property' => 'name', 'name' => 'Class' ,'relation' => 'studentRecord.myClass'] , 
                ['property' => 'name', 'name' => 'section' ,'relation' => 'studentRecord.section'] , 
                ['property' => 'locked', 'name' => 'Locked' , 'type' => 'boolean-switch', 'action' => 'user.lock-account', 'field' => 'lock', 'true-statement' => 'Locked', 'false-statement' => 'Unlocked',  'can' => 'lock user'],
                ['type' => 'dropdown', 'name' => 'actions','links' => [
                    ['href' => 'students.edit', 'text' => 'Manage Profile', 'icon' => 'fas fa-pen', 'can' => 'update student'],
                    ['href' => 'students.show', 'text' => 'View', 'icon' => 'fas fa-eye',],
                ]],
                ['type' => 'delete', 'name' => 'Delete', 'action' => 'students.destroy','can' => 'delete student']
            ]
            ]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4186068181-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'parent')): ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\User::class,'uniqueId' => 'students-list-table','filters' => [
            ['name' => 'students'], 
            ['name' => 'inSchool'],
            ['name' => 'whereRelation', 'arguments' => ['parents', 'parent_records.user_id', auth()->user()->id]],
            ['name' => 'orderBy' , 'arguments' => ['name']], 
            ['name' => 'has', 'arguments' => ['StudentRecord']], 
            ['name' => 'with' , 'arguments' => ['studentRecord','studentRecord.section', 'studentRecord.myClass']]],'columns' => [
                ['property' => 'name'] , 
                ['property' => 'email'] , 
                ['property' => 'admission_number' ,'relation' => 'studentRecord'] , 
                ['property' => 'name', 'name' => 'Class' ,'relation' => 'studentRecord.myClass'] , 
                ['property' => 'name', 'name' => 'section' ,'relation' => 'studentRecord.section'] , 
                ['type' => 'dropdown', 'name' => 'actions','links' => [
                    ['href' => 'students.show', 'text' => 'View', 'icon' => 'fas fa-eye',  ],
                ]],
            ]
            ]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4186068181-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/list-students-table.blade.php ENDPATH**/ ?>