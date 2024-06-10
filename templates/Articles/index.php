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
            echo $this->Form->input('Reffourni', ['label' => 'Reffourni', 'value' => $this->request->getQuery('Reffourni'), 'class' => 'form-control']);
            ?>
          </div>

        </div>
        <div class="row">
          <?php echo $this->Form->create(null, ['type' => 'get']); ?>
          <div class="col-xs-6">
            <?php
            echo $this->Form->input('Refggb', ['label' => 'RefCO', 'value' => $this->request->getQuery('refCO'), 'class' => 'form-control']);
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


        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped ">
                <thead>
                <h3><?= __('Articles') ?>
                  <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'button float-right btn btn-success', 'escape' => false]) ?>
                </h3>
                     <th><?= $this->Paginator->sort('Reffourni') ?></th>
                    <th><?= $this->Paginator->sort('Libellé') ?></th>
                    <th><?= $this->Paginator->sort('RefCO') ?></th>
                    <th><?= $this->Paginator->sort('meilleur_prix_achat') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= h($article->Reffourni) ?></td>
                    <td><?= h($article->Dsignation) ?></td>
                    <td><?= h($article->Refggb) ?></td>
                    <td><?= $article->meilleur_prix_achat === null ? '' : $this->Number->format($article->meilleur_prix_achat) ?></td>
                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $article->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                    <?= $this->Html->link('<i class="fa fa-print"></i>', ['action' => 'imprimer', $article->id], ['class' => 'btn btn-secondary btn-sm', 'escape' => false, 'title' => 'Imprimer']) ?>
                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
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

