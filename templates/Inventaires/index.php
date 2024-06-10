<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Article> $articles
 */
?>


  <section class="content">
    <div class="admins index content">

      <div class="box-body">
        <!-- Content of the box body goes here -->

        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped ">
                <thead>
                <h3><?= __('Inventaires') ?>
                  <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'button float-right btn btn-success', 'escape' => false]) ?>
                </h3>

                <tr>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('depot_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventaires as $inventaire): ?>
                <tr>
                    <td><?= h($inventaire->numero) ?></td>
                    <td><?= $inventaire->has('depot') ? $this->Html->link($inventaire->depot->name, ['controller' => 'Depots', 'action' => 'view', $inventaire->depot->id]) : '' ?></td>
                    <td><?= h($inventaire->date) ?></td>
                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $inventaire->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>

                  </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

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
