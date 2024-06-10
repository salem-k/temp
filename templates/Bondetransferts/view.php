<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bondetransfert $bondetransfert
 */
?>

<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
              <strong><h3><?= h($bondetransfert->numero) ?></strong></h3>
          <style>
            /* Add spacing between table rows */
            table {
              border-collapse: separate;
              border-spacing: 10px; /* Adjust as needed */
            }
          </style>
            <table>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($bondetransfert->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $bondetransfert->has('pointdevente') ? $this->Html->link($bondetransfert->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $bondetransfert->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $bondetransfert->has('depot') ? $this->Html->link($bondetransfert->depot->name, ['controller' => 'Depots', 'action' => 'view', $bondetransfert->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Bonreceptionstock') ?></th>
                    <td><?= $bondetransfert->has('bonreceptionstock') ? $this->Html->link($bondetransfert->bonreceptionstock->numero, ['controller' => 'Bonreceptionstocks', 'action' => 'view', $bondetransfert->bonreceptionstock->id]) : '' ?></td>
                </tr>

                <tr>
                    <th><?= __('Depot To Id') ?></th>
                    <td><?= $this->Number->format($bondetransfert->depot_to_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometragedepart') ?></th>
                    <td><?= $this->Number->format($bondetransfert->kilometragedepart) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometragearrive') ?></th>
                    <td><?= $this->Number->format($bondetransfert->kilometragearrive) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($bondetransfert->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
