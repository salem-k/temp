<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bonentre $bonentre
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
            <strong><h3><?= h($bonentre->id) ?></strong></h3>
              <style>
                /* Add spacing between table rows */
                table {
                  border-collapse: separate;
                  border-spacing: 10px; /* Adjust as needed */
                }
              </style>
            <table>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $bonentre->has('depot') ? $this->Html->link($bonentre->depot->name, ['controller' => 'Depots', 'action' => 'view', $bonentre->depot->id]) : '' ?></td>
                </tr>

                <tr>
                    <th><?= __('Date Debut') ?></th>
                    <td><?= h($bonentre->Date_Debut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Fin') ?></th>
                    <td><?= h($bonentre->Date_Fin) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
