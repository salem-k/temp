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
                  echo $this->Form->control('nom', [
                      'label' => 'Nom',
                      'value' => $this->request->getQuery('nom'),
                      'class' => 'form-control'
                  ]);
                  ?>
              </div>
              <div class="col-xs-6">
                  <?php
                  echo $this->Form->control('fonction_id', [
                      'label' => 'Fonction',
                      'options' => $fonctions, // Assuming $fonctions is an array of options with id as keys and function names as values
                      'empty' => true, // Optional, if you want an empty default option
                      'value' => $this->request->getQuery('fonction_id'), // Set the selected value from the query parameter
                      'class' => 'form-control'
                  ]);
                  ?>
              </div>
              <?php echo $this->Form->end(); ?>
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
                <h3><?= __('Personnels') ?>
                  <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'button float-right btn btn-success', 'escape' => false]) ?>
                </h3>

                <tr>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('prenom') ?></th>
                    <th><?= $this->Paginator->sort('fonction_id') ?></th>

                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($personnels as $personnel): ?>
                <tr>
                    <td><?= h($personnel->nom) ?></td>
                    <td><?= h($personnel->prenom) ?></td>
                    <td><?= $personnel->has('fonction') ? $this->Html->link($personnel->fonction->name, ['controller' => 'Fonctions', 'action' => 'view', $personnel->fonction->id]) : '' ?></td>

                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $personnel->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $personnel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personnel->id), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
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

