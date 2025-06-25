<div class="card">
    <div class="card-header">
        <h2 class="card-title">Fees</h2>
    </div>
    <div class="card-body">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['uniqueId' => 'list-fees-table','unique_id' => 'list-fees-table','model' => App\Models\Fee::class,'filters' => [
            ['name' => 'whereRelation', 'arguments' => ['feeCategory','school_id', auth()->user()->school_id]],
            ['name' => 'with', 'arguments' => ['feeCategory']]
        ],'columns' => [
            ['property' => 'name'],
            ['property' => 'name', 'relation' => 'feeCategory', 'name' =>'Fee Category'],
            ['name' => 'Actions', 'type' => 'dropdown' , 'links' => [
                ['href' => 'fees.edit', 'text' => 'edit', 'icon' => 'fas fa-cog'],
            ]],
            ['type' => 'delete', 'name' => 'Delete', 'action' => 'fees.destroy',]
        ]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1699784002-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
</div>
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/list-fees-table.blade.php ENDPATH**/ ?>