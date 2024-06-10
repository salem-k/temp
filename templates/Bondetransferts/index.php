<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Article> $articles
 */
?>

  <!-- End Search Bar -->
  <section class="content">
    <div class="admins index content">

      <div class="box-body">
        <!-- Content of the box body goes here -->

        <div class="col-xs-">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped " style="width: 50%;">
                <thead>
                <h3><?= __('Bon de transfert') ?>
                  <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'button float-right btn btn-success', 'escape' => false]) ?>
                </h3>

                <tr>

                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('pointdevente_id') ?></th>
                    <th><?= $this->Paginator->sort('depot_id') ?></th>
                    <th><?= $this->Paginator->sort('depot_to_id') ?></th>
                    <th><?= $this->Paginator->sort('bonreceptionstock_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bondetransferts as $bondetransfert): ?>
                <tr>

                    <td><?= h($bondetransfert->numero) ?></td>
                    <td><?= h($bondetransfert->date) ?></td>
                    <td><?= $bondetransfert->has('pointdevente') ? $this->Html->link($bondetransfert->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $bondetransfert->pointdevente->id]) : '' ?></td>
                    <td><?= $bondetransfert->has('depot') ? $this->Html->link($bondetransfert->depot->name, ['controller' => 'Depots', 'action' => 'view', $bondetransfert->depot->id]) : '' ?></td>
                  <td><?= $bondetransfert->has('depot_to') ? $this->Html->link($bondetransfert->bondetransfert->depot_to, ['controller' => 'Bondetransferts', 'action' => 'view', $bondetransfert->depot_to->id]) : '' ?></td>
                  <td><?= $bondetransfert->has('bonreceptionstock') ? $this->Html->link($bondetransfert->bonreceptionstock->numero, ['controller' => 'Bonreceptionstocks', 'action' => 'view', $bondetransfert->bonreceptionstock->id]) : '' ?></td>
                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $bondetransfert->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>

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

