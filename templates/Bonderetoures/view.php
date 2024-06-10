<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bonderetoure $bonderetoure
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
            <strong></strong><h3><?= h($bonderetoure->numero) ?></strong></h3>
              <style>
                /* Add spacing between table rows */
                table {
                  border-collapse: separate;
                  border-spacing: 10px; /* Adjust as needed */
                }
              </style>
            <table>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $bonderetoure->has('pointdevente') ? $this->Html->link($bonderetoure->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $bonderetoure->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $bonderetoure->has('depot') ? $this->Html->link($bonderetoure->depot->name, ['controller' => 'Depots', 'action' => 'view', $bonderetoure->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($bonderetoure->numero) ?></td>
                </tr>

                <tr>
                    <th><?= __('Kilometragedepart') ?></th>
                    <td><?= $bonderetoure->kilometragedepart === null ? '' : $this->Number->format($bonderetoure->kilometragedepart) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometragearrive') ?></th>
                    <td><?= $bonderetoure->kilometragearrive === null ? '' : $this->Number->format($bonderetoure->kilometragearrive) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poste') ?></th>
                    <td><?= $this->Number->format($bonderetoure->poste) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($bonderetoure->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
