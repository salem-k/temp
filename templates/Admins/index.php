<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Admin> $admins
 */
?>

<!-- Recherche BAR -->

<br><br><br>
<section class="content-header">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>
  <h1>
    Recherche
  </h1>
</section>
<section class="content" style="width: 99%" style="background-color: white ;">
  <div class="box">
    <div class="box-body">
      <div class="row">
        <?php echo $this->Form->create($cmd, ['type' => 'get']); ?>
        <div class="col-xs-6">
          <?php
          echo $this->Form->input('datedebut', array('label' => 'Date debut', 'value' => $this->request->getQuery('datedebut'), 'id' => 'datedebut', 'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'class' => 'form-control', 'type' => 'date'));
          ?>
        </div>
        <div class="col-xs-6">
          <?php
          echo $this->Form->input('datefin', array('label' => 'Date fin', 'value' => $this->request->getQuery('datefin'), 'id' => 'datefin', 'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'class' => 'form-control ', 'type' => 'date'));
          ?>
        </div>
        <div class="col-xs-6">
          <?php
          echo $this->Form->control('fournisseur_id', ['label' => 'Fournisseur', 'value' => $this->request->getQuery('fournisseur_id'), 'class' => 'form-control select2', 'empty' => 'Veuillez choisir !!']); ?>
        </div>
        <div class="col-xs-6">
          <?php
          echo $this->Form->control('numero', ['required' => 'off', 'label' => 'Numero', 'value' => $this->request->getQuery('numero'), 'autocomplete' => 'off', 'class' => 'form-control control-label']);
          ?>
        </div>
      </div>

      <div class="pull-right" style="margin-right:50%;margin-top: 20px;">
        <button type="submit" class="btn btn-primary">Afficher</button>
        <?php echo $this->Html->link(__('Afficher Tous'), ['action' => 'index'], ['class' => 'btn btn-primary ']) ?>
      </div>
      <?php echo $this->Form->end(); ?>
    </div>
  </div>
</section>
<!-- Recherche BAR -->
<section class="content">
  <div class="admins index content">
    <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'button float-right btn btn-success', 'escape' => false]) ?>
    <h3><?= __('Admins') ?></h3>
    <div class="box-body">

      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <table id="example2" class="table table-bordered table-striped ">
              <thead>
              <tr>

                <th><?= $this->Paginator->sort('nom') ?></th>
                <th><?= $this->Paginator->sort('prenom') ?></th>
                <th><?= $this->Paginator->sort('adresse') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($admins as $admin): ?>
                <tr>
                  <td><?= $this->Number->format($admin->id) ?></td>
                  <td><?= h($admin->nom) ?></td>
                  <td><?= h($admin->prenom) ?></td>
                  <td><?= h($admin->adresse) ?></td>
                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $admin->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $admin->id], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
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
