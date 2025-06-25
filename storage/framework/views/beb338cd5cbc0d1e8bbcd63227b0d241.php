<div class="card">
    <div class="card-header">
        <h2 class="card-title">Teachers list</h2>
    </div>
    <div class="card-body">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\User::class,'uniqueId' => 'teachers-list-table','filters' => [['name' => 'role', 'arguments' => ['teacher']], ['name' => 'inSchool'], ['name' => 'orderBy' , 'arguments' => ['name']]],'columns' => [
            ['property' => 'name'] , 
            ['property' => 'email'] ,
            ['property' => 'gender'] ,
            ['property' => 'locked', 'name' => 'Locked' , 'type' => 'boolean-switch', 'action' => 'user.lock-account', 'field' => 'lock', 'true-statement' => 'Locked', 'false-statement' => 'Unlocked',  'can' => 'lock user'],
            ['type' => 'dropdown', 'name' => 'actions','links' => [
                ['href' => 'teachers.edit', 'text' => 'Manage Profile', 'icon' => 'fas fa-pen',],
                ['href' => 'teachers.show', 'text' => 'View', 'icon' => 'fas fa-eye',  ],
            ]],
            ['type' => 'delete', 'name' => 'Delete', 'action' => 'teachers.destroy',]
         ]
        ]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3706745127-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/list-teachers-table.blade.php ENDPATH**/ ?>