<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="admins view content">


          <section class="content" style="width: 99%">
            <div class="box">
              <div class="box-header">
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">

                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($admin->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenom') ?></th>
                    <td><?= h($admin->prenom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($admin->adresse) ?></td>
                </tr>

            </table>
        </div>
    </div>
</div>
