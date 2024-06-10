<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventaire $inventaire
 */
?>

<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
            <strong><h3><?= h($inventaire->id) ?></strong></h3>
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
                    <td><?= h($inventaire->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $inventaire->has('depot') ? $this->Html->link($inventaire->depot->name, ['controller' => 'Depots', 'action' => 'view', $inventaire->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $inventaire->has('pointdevente') ? $this->Html->link($inventaire->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $inventaire->pointdevente->id]) : '' ?></td>
                </tr>

                <tr>
                    <th><?= __('Valide') ?></th>
                    <td><?= $this->Number->format($inventaire->valide) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typeinventaire') ?></th>
                    <td><?= $inventaire->typeinventaire === null ? '' : $this->Number->format($inventaire->typeinventaire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($inventaire->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
