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
            echo $this->Form->input('numero', ['label' => 'Numero', 'value' => $this->request->getQuery('numero'), 'class' => 'form-control']);
            ?>
          </div>
          <div class="col-xs-6">
            <?php
            echo $this->Form->input('prenom', ['label' => 'Date', 'value' => $this->request->getQuery('date'), 'class' => 'form-control']);
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
                <h3><?= __('Facture Fournisseurs') ?>
                  <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'button float-right btn btn-success', 'escape' => false]) ?>
                </h3>

                <tr>

                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('fournisseur_id') ?></th>

                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('pointdevente_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($factures as $facture): ?>
                <tr>

                    <td><?= h($facture->numero) ?></td>
                    <td><?= $facture->fournisseur_id === null ? '' : $this->Number->format($facture->fournisseur_id) ?></td>

                    <td><?= h($facture->date) ?></td>
                    <td><?= $facture->has('pointdevente') ? $this->Html->link($facture->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $facture->pointdevente->id]) : '' ?></td>

                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $facture->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                    <?= $this->Html->link('<i class="fa fa-print"></i>', ['action' => 'imprimer', $facture->id], ['class' => 'btn btn-secondary btn-sm', 'escape' => false, 'title' => 'Imprimer']) ?>
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
