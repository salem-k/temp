<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscategory $souscategory
 */
?>

<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-2">
          <div class="box">
            <div class="box-header with-border">
              <strong><h3><?= h($souscategory->name) ?></strong></h3>
            <table>
                <tr>
                  <div class="box-header with-border">
                    <th><?= __('Name') ?></th>
                    <td><?= h($souscategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $souscategory->has('category') ? $this->Html->link($souscategory->category->name, ['controller' => 'Categories', 'action' => 'view', $souscategory->category->id]) : '' ?></td>
                </tr>

            </table>
        </div>
    </div>
</div>
