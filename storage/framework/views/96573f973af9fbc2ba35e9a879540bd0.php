<div class="card">
    <div class="card-header">
        <h4 class="card-title">Notices</h4>
    </div>
    <div class="card-body">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['update notice', 'delete notice'])): ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\Notice::class,'uniqueId' => 'List-notice-table','filters' => [
                ['name' => 'where', 'arguments' => ['school_id' , auth()->user()->school_id]]
            ],'columns' => [
               [ 'property' => 'title'],
               [ 'property' => 'start_date_for_humans', 'name' => 'Start Date', 'columnName' => 'start_date'],
               [ 'property' => 'stop_date_for_humans', 'name' => 'Stop Date',  'columnName' => 'stop_date'],
               ['name' => 'actions' , 'type' => 'dropdown' , 'links' => [
                    ['href' => 'notices.show', 'text' => 'View', 'icon' => 'fas fa-eye'],
               ]],
               ['type' => 'delete' , 'name' => 'delete', 'action' => 'notices.destroy']
            ]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3472883993-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php else: ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('datatable', ['model' => App\Models\Notice::class,'filters' => [
                ['name' => 'where', 'arguments' => ['school_id' , auth()->user()->school_id]],
                ['name' => 'active']
            ],'columns' => [
            [ 'property' => 'title'],
            ['name' => 'action' , 'type' => 'dropdown' , 'links' => [
                ['href' => 'notices.show', 'text' => 'View', 'icon' => 'fas fa-eye'],
            ]],
            ]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3472883993-1', $__slots ?? [], get_defined_vars());

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
<?php /**PATH /home/schrodingercat/Desktop/schoolManagement/skuul/resources/views/livewire/list-notices-table.blade.php ENDPATH**/ ?>