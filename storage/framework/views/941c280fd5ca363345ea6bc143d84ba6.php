<div class="card" >
    <div class="card-header">
        <h4 class="card-title">All Classes</h4>
    </div>
    <div class="card-body">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\School::class,'uniqueId' => 'class-list','filters' => [['name' => 'find' , 'arguments' => [auth()->user()->school_id]] , ['name' => 'myClasses'], ['name' => 'with', 'arguments' => ['classGroup']]],'columns' => 
        [
            ['property' => 'name'] , 
            ['property' => 'name', 'name' => 'classGroup', 'relation' => 'classGroup'] , 
            ['type' => 'dropdown', 'name' => 'actions','links' => [
                ['href' => 'classes.edit', 'text' => 'Settings', 'icon' => 'fas fa-cog'],
                ['href' => 'classes.show', 'text' => 'View', 'icon' => 'fas fa-eye'],
            ]],
            ['type' => 'delete', 'name' => 'Delete', 'action' => 'classes.destroy']
         ]
        ]);

$__html = app('livewire')->mount($__name, $__params, 'lw-263717344-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/list-classes-table.blade.php ENDPATH**/ ?>