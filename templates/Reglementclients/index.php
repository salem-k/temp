<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Article> $articles
 */
?>
<div class="articles index content">
  <!-- Search Bar -->
  <section class="content-header">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>
    <h1>Recherche</h1>
  </section>
  <section class="content" style="width: 99%" style="background-color: white ;">
    <div class="box">
      <div class="box-body">
        <div class="row">
          <?php echo $this->Form->create(null, ['type' => 'get']); ?>
          <div class="col-xs-6">
            <?php
            echo $this->Form->input('nom client', ['label' => 'Nom client', 'value' => $this->request->getQuery('nom client'), 'class' => 'form-control']);
            ?>
          </div>
          <div class="col-xs-6">
            <?php
            echo $this->Form->input('Date', ['label' => 'Date', 'value' => $this->request->getQuery('date'), 'class' => 'form-control']);
            ?>
          </div>
        </div>
        <div class="pull-right" style="margin-right:50%;margin-top: 20px;">
          <button type="submit" class="btn btn-primary">Rechercher</button>
          <?php echo $this->Html->link(__('Afficher Tous'), ['action' => 'index'], ['class' => 'btn btn-primary ']) ?>
        </div>
        <?php echo $this->Form->end(); ?>
      </div>
    </div>
  </section>
  <!-- End Search Bar -->

  <section class="content">
    <div class="admins index content">

      <div class="box-body">
        <!-- Content of the box body goes here -->

        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped ">
                <thead>
                <h3><?= __('Reglement Clients') ?>
                  <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'button float-right btn btn-success', 'escape' => false]) ?>
                </h3>

                <tr>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('Date') ?></th>
                    <th><?= $this->Paginator->sort('Montant') ?></th>
                    <th><?= $this->Paginator->sort('montantaffecte') ?></th>

                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reglementclients as $reglementclient): ?>
                <tr>
                  <td>
                    <?= $reglementclient->has('client') ? $this->Html->link($reglementclient->client->nom, ['controller' => 'Clients', 'action' => 'view', $reglementclient->client->id]) : '' ?>
                  </td>
                    <td><?= h($reglementclient->Date) ?></td>
                    <td><?= $reglementclient->Montant === null ? '' : $this->Number->format($reglementclient->Montant) ?></td>
                    <td><?= $reglementclient->montantaffecte === null ? '' : $this->Number->format($reglementclient->montantaffecte) ?></td>
                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $reglementclient->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $reglementclient->id], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $reglementclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reglementclient->id), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
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

