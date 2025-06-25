<div class="card" >
    <div class="card-header">
        <h4 class="card-title">All Class Groups</h4>
    </div>
    <div class="card-body">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\ClassGroup::class,'uniqueId' => 'class-group-list','filters' => [['name' => 'where' , 'arguments' => ['school_id' , auth()->user()->school_id]]],'columns' => 
        [
            ['property' => 'name'] , 
            ['type' => 'dropdown', 'name' => 'actions','links' => [
                ['href' => 'class-groups.edit', 'text' => 'Settings', 'icon' => 'fas fa-cog'],
                ['href' => 'class-groups.show', 'text' => 'View', 'icon' => 'fas fa-eye'],
            ]],
            ['type' => 'delete', 'name' => 'Delete', 'action' => 'class-groups.destroy']
         ]
        ]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1712709243-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/list-class-groups-table.blade.php ENDPATH**/ ?>