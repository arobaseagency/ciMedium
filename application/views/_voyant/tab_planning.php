<div>
    <h4>Disponibilité</h4>
    <?php //echo date('D', strtotime("Sunday +1 days")); ?>
    <?php
        $timestamp = strtotime('next Sunday');
        $days = array();
    ?>
    <table id="t-planning" class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <?php for($i=00; $i <= 23; $i++): ?>
                <th class="t-plan-hours"><?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?>h</th>
                <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?php for($e=0; $e < 7; $e++): ?>
            <tr>
                <td class="t-plan-days"><?php echo date('D', strtotime("Sunday +{$e} days")); ?></td>
                <?php for($t=0; $t <= 23; $t++): ?>
                <td class="t-plan-zone"></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>