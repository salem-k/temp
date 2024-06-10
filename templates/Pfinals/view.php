<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pfinal $pfinal
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
              <strong><H3><?= h($pfinal->Description) ?></STRONG></h3>
              <style>
                /* Add spacing between table rows */
                table {
                  border-collapse: separate;
                  border-spacing: 10px; /* Adjust as needed */
                }
              </style>
            <table>
                <tr>
                  <div class="box-header with-border">

                    <th><?= __('Description') ?></th>
                    <td><?= h($pfinal->Description) ?></td>


                  </div>
                </tr>
                <tr>

                    <th><?= __('PHOTO') ?></th>
                    <td><?= h($pfinal->PHOTO) ?></td>
                </tr>
                <tr>
                    <th><?= __('Souscategory') ?></th>
                    <td><?= $pfinal->has('souscategory') ? $this->Html->link($pfinal->souscategory->name, ['controller' => 'Souscategories', 'action' => 'view', $pfinal->souscategory->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $pfinal->has('category') ? $this->Html->link($pfinal->category->name, ['controller' => 'Categories', 'action' => 'view', $pfinal->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pfinal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $this->Number->format($pfinal->Prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrixSEC') ?></th>
                    <td><?= $this->Number->format($pfinal->PrixSEC) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrixGROS') ?></th>
                    <td><?= $this->Number->format($pfinal->PrixGROS) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gratuit') ?></th>
                    <td><?= $pfinal->Gratuit ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
