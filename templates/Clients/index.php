<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Client> $clients
 */
?>


<div class="articles index content">
  <!-- Search Bar -->
  <section class="content-header">
    <h1>Recherche</h1>
  </section>
  <section class="content" style="width: 99%" style="background-color: white ;">
    <div class="box">
      <div class="box-body">
        <div class="row">
          <?php echo $this->Form->create(null, ['type' => 'get']); ?>
          <div class="col-xs-8">
            <?php
            echo $this->Form->input('nom', ['label' => 'Nom', 'value' => $this->request->getQuery('nom'), 'class' => 'form-control']);
            ?>
          </div>
          <div class="col-xs-6">

          </div>

        </div>
        <div class="pull-right" style="margin-right:50%;margin-top: 20px;">
          <button type="submit" class="btn btn-primary">Rechercher</button>
          <?php echo $this->Html->link(__('Afficher Tous'), ['action' => 'index'], ['class' => 'btn btn-primary ']) ?>
        </div>
        <?php echo $this->Form->end(); ?>
      </div>
    </div>
  </section> <section class="content">
    <div class="admins index content">

      <div class="box-body">
        <!-- Content of the box body goes here -->

        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped ">
                <thead>
                <h3><?= __('Clients') ?>

                  <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'button float-right btn btn-success', 'escape' => false]) ?>
                </h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                  <th><?= $this->Paginator->sort('nom') ?></th>


                  <th><?= $this->Paginator->sort('Adresse') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                  <td><?= h($client->nom) ?></td>

                    <td><?= h($client->Adresse) ?></td>
                    <td><?= h($client->Email) ?></td>

                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $client->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                    <?= $this->Html->link('<i class="fa fa-print"></i>', ['action' => 'imprimer', $client->id], ['class' => 'btn btn-secondary btn-sm', 'escape' => false, 'title' => 'Imprimer']) ?>
                  </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
                </thead>
              </table>
            </div>
          </div>
</div> <!-- DataTables -->

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

