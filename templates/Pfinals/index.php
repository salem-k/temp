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
            echo $this->Form->input('nom', ['label' => 'Nom', 'value' => $this->request->getQuery('nom'), 'class' => 'form-control']);
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
                <h3><?= __('Packs') ?>
                  <?= $this->Html->link('<i class="fa fa-plus"></i>', ['action' => 'add'], ['class' => 'button float-right btn btn-success', 'escape' => false]) ?>
                </h3>

                <tr>
                    <th><?= $this->Paginator->sort('Description') ?></th>
                    <th><?= $this->Paginator->sort('Prix') ?></th>
                    <th><?= $this->Paginator->sort('PrixSEC') ?></th>
                    <th><?= $this->Paginator->sort('PrixGROS') ?></th>
                    <th><?= $this->Paginator->sort('PHOTO') ?></th>
                    <th><?= $this->Paginator->sort('Gratuit') ?></th>
                  <th><?= $this->Paginator->sort('categories_id') ?></th>
                  <th><?= $this->Paginator->sort('souscategorie_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pfinals as $pfinal): ?>
                <tr>
                    <td><?= h($pfinal->Description) ?></td>
                    <td><?= $this->Number->format($pfinal->Prix) ?></td>
                    <td><?= $this->Number->format($pfinal->PrixSEC) ?></td>
                    <td><?= $this->Number->format($pfinal->PrixGROS) ?></td>
                    <td><?= h($pfinal->PHOTO) ?></td>
                  <td><?= $pfinal->Gratuit == 0 ? 'No' : 'Yes' ?></td>
                  <td><?= $pfinal->has('category') ? $this->Html->link($pfinal->category->name, ['controller' => 'Categories', 'action' => 'view', $pfinal->category->id]) : '' ?></td>
                  <td><?= $pfinal->has('souscategory') ? $this->Html->link($pfinal->souscategory->name, ['controller' => 'Souscategories', 'action' => 'view', $pfinal->souscategory->id]) : '' ?></td>
                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $pfinal->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                    <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $pfinal->id], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                    <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $pfinal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pfinal->id), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
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
