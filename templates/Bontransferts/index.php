<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Bontransfert> $bontransferts
 */
?>
<div class="bontransferts index content">
    <?= $this->Html->link(__('New Bontransfert'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bontransferts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('depot_id') ?></th>
                    <th><?= $this->Paginator->sort('depot_to_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bontransferts as $bontransfert): ?>
                <tr>
                    <td><?= $this->Number->format($bontransfert->id) ?></td>
                    <td><?= $this->Number->format($bontransfert->reference) ?></td>
                    <td><?= h($bontransfert->date) ?></td>
                    <td><?= $bontransfert->has('depot') ? $this->Html->link($bontransfert->depot->nom, ['controller' => 'Depots', 'action' => 'view', $bontransfert->depot->id]) : '' ?></td>
                    <td><?= h($bontransfert->depot_to_id) ?></td>
                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $category->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>

                  </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>


<!-- DataTables -->
<?php echo $this->Html->css('AdminLTE./bower_components/datatables.net-bs/css/dataTables.bootstrap.min', ['block' => 'css']); ?>

<!-- DataTables -->
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net/js/jquery.dataTables.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net-bs/js/dataTables.bootstrap.min', ['block' => 'script']); ?>
<!-- Select2 -->
<?php echo $this->Html->css('AdminLTE./bower_components/select2/dist/css/select2.min', ['block' => 'css']); ?>

<!-- Select2 -->
<?php echo $this->Html->script('AdminLTE./bower_components/select2/dist/js/select2.full.min', ['block' => 'script']); ?>
<?php $this->start('scriptBottom'); ?>
<script>
  $(function() {
    $('.select2').select2();

    $('#example1').DataTable();
    $('#example2').DataTable({
      'paging': true,
      'lengthChange': false,
      'searching': false,
      'ordering': true,
      'info': true,
      'autoWidth': false
    })
  })
</script>
<?php $this->end(); ?>
