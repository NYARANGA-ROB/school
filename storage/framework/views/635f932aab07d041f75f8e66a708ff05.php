<div class="card">
    <div class="card-header">
        <h2 class="card-title">Fee Invoices</h2>
    </div>
    <div class="card-body">
        <form action="" class="my-5 md:grid grid-cols-2 gap-4">
            <?php if (isset($component)) { $__componentOriginal9bbf68ba55e81bd78101af3f8eebcaa4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9bbf68ba55e81bd78101af3f8eebcaa4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-year','data' => ['id' => 'year','name' => 'year','label' => 'Due Date Year','wire:model.live' => 'year']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-year'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'year','name' => 'year','label' => 'Due Date Year','wire:model.live' => 'year']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9bbf68ba55e81bd78101af3f8eebcaa4)): ?>
<?php $attributes = $__attributesOriginal9bbf68ba55e81bd78101af3f8eebcaa4; ?>
<?php unset($__attributesOriginal9bbf68ba55e81bd78101af3f8eebcaa4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9bbf68ba55e81bd78101af3f8eebcaa4)): ?>
<?php $component = $__componentOriginal9bbf68ba55e81bd78101af3f8eebcaa4; ?>
<?php unset($__componentOriginal9bbf68ba55e81bd78101af3f8eebcaa4); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalbf566fc26595b9cc6779e170beef8a5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbf566fc26595b9cc6779e170beef8a5a = $attributes; } ?>
<?php $component = App\View\Components\Select::resolve(['name' => '','id' => 'invoice-status','label' => 'Invoice status'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'status']); ?>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($status); ?>"><?php echo e(ucfirst($status)); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbf566fc26595b9cc6779e170beef8a5a)): ?>
<?php $attributes = $__attributesOriginalbf566fc26595b9cc6779e170beef8a5a; ?>
<?php unset($__attributesOriginalbf566fc26595b9cc6779e170beef8a5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf566fc26595b9cc6779e170beef8a5a)): ?>
<?php $component = $__componentOriginalbf566fc26595b9cc6779e170beef8a5a; ?>
<?php unset($__componentOriginalbf566fc26595b9cc6779e170beef8a5a); ?>
<?php endif; ?>
        </form>
        <?php if (isset($component)) { $__componentOriginal5c29929acf227acd7c5fa56a39e71fcc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c29929acf227acd7c5fa56a39e71fcc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.loading-spinner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('loading-spinner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c29929acf227acd7c5fa56a39e71fcc)): ?>
<?php $attributes = $__attributesOriginal5c29929acf227acd7c5fa56a39e71fcc; ?>
<?php unset($__attributesOriginal5c29929acf227acd7c5fa56a39e71fcc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c29929acf227acd7c5fa56a39e71fcc)): ?>
<?php $component = $__componentOriginal5c29929acf227acd7c5fa56a39e71fcc; ?>
<?php unset($__componentOriginal5c29929acf227acd7c5fa56a39e71fcc); ?>
<?php endif; ?>

        <div wire:loading.remove.delay class="my-3">
            <?php if(! \Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', ['student', 'parent'])): ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\FeeInvoice::class,'uniqueId' => 'list-fee-invoices','filters' => array_merge([
                    ['name' => 'whereRelation', 'arguments' => ['user', 'school_id', auth()->user()->school_id]],
                    ['name' => 'whereYear', 'arguments' => ['due_date', $year]],
                    ['name' => 'orderBy', 'arguments' => ['due_date', 'desc']],
                    ['name' => 'with', 'arguments' => ['user','user.studentRecord.myClass','user.studentRecord.section']]
                ], $queryAddon),'columns' => [
                    ['property' => 'name',],
                    ['name' => 'Student\'s Name', 'property' => 'name', 'relation' => 'user'],
                    ['name' => 'paid'],
                    ['property'=>'balance'],
                    ['property' => 'due_date'],
                    ['name' => 'Actions', 'type' => 'dropdown' , 'links' => [
                        ['href' => 'fee-invoices.edit', 'text' => 'edit', 'icon' => 'fas fa-cog'],
                        ['href' => 'fee-invoices.show', 'text' => 'view', 'icon' => 'fas fa-eye'],
                        ['href' => 'fee-invoices.pay', 'text' => 'Add Payment   ', 'icon' => 'fas fa-money-check-alt'],
                    ]],
                    ['type' => 'delete', 'name' => 'Delete', 'action' => 'fee-invoices.destroy',]
                ]]);

$__html = app('livewire')->mount($__name, $__params, Str::Random(10), $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endif; ?>
            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'parent')): ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\FeeInvoice::class,'uniqueId' => 'list-fee-invoices','filters' => array_merge([
                    ['name' => 'whereRelation', 'arguments' => ['user', 'school_id', auth()->user()->school_id]],
                    ['name' => 'whereRelation', 'arguments' => ['user.parents', 'parent_records.user_id', auth()->user()->id]],
                    ['name' => 'whereYear', 'arguments' => ['due_date', $year]],
                    ['name' => 'orderBy', 'arguments' => ['due_date', 'desc']],
                    ['name' => 'with', 'arguments' => ['user','user.studentRecord.myClass','user.studentRecord.section']]
                ], $queryAddon),'columns' => [
                    ['property' => 'name',],
                    ['name' => 'Student\'s Name', 'property' => 'name', 'relation' => 'user'],
                    ['name' => 'Class', 'property' => 'name', 'relation' => 'user.studentRecord.myClass'],
                    ['name' => 'Section', 'property' => 'name', 'relation' => 'user.studentRecord.section'],
                    ['name' => 'paid'],
                    ['property'=>'balance'],
                    ['property' => 'due_date'],
                    ['name' => 'Actions', 'type' => 'dropdown' , 'links' => [
                        ['href' => 'fee-invoices.show', 'text' => 'view', 'icon' => 'fas fa-eye'],
                    ]],
                ]]);

$__html = app('livewire')->mount($__name, $__params, Str::Random(10), $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endif; ?>
            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'student')): ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\FeeInvoice::class,'uniqueId' => 'list-fee-invoices','filters' => array_merge([
                    ['name' => 'whereRelation', 'arguments' => ['user', 'id', auth()->user()->id]],
                    ['name' => 'whereYear', 'arguments' => ['due_date', $year]],
                    ['name' => 'orderBy', 'arguments' => ['due_date', 'desc']],
                    ['name' => 'with', 'arguments' => ['user','user.studentRecord.myClass','user.studentRecord.section']]
                ], $queryAddon),'columns' => [
                    ['property' => 'name',],
                    ['name' => 'paid'],
                    ['property'=>'balance'],
                    ['property' => 'due_date'],
                    ['name' => 'Actions', 'type' => 'dropdown' , 'links' => [
                        ['href' => 'fee-invoices.show', 'text' => 'view', 'icon' => 'fas fa-eye'],
                    ]],
                ]]);

$__html = app('livewire')->mount($__name, $__params, Str::Random(10), $__slots ?? [], get_defined_vars());

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
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/list-fee-invoices-table.blade.php ENDPATH**/ ?>