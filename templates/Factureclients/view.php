<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factureclient $factureclient
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="box">
            <div class="box-header with-border">
            <strong><h3><?= h($factureclient->id) ?></strong></h3>
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
                    <td><?= h($factureclient->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $factureclient->has('client') ? $this->Html->link($factureclient->client->id, ['controller' => 'Clients', 'action' => 'view', $factureclient->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $factureclient->has('pointdevente') ? $this->Html->link($factureclient->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $factureclient->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $factureclient->has('depot') ? $this->Html->link($factureclient->depot->name, ['controller' => 'Depots', 'action' => 'view', $factureclient->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Payementcomptant') ?></th>
                    <td><?= h($factureclient->payementcomptant) ?></td>
                </tr>

                <tr>
                    <th><?= __('Commandeclient') ?></th>
                    <td><?= $factureclient->has('commandeclient') ? $this->Html->link($factureclient->commandeclient->code, ['controller' => 'Commandeclients', 'action' => 'view', $factureclient->commandeclient->id]) : '' ?></td>
                </tr>


                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($factureclient->date) ?></td>
                </tr>
            </table>
            <div class="text">

            </div>
            <div class="related">
              <br>
                <strong><h4><?= __('Related Factureavoirs') ?></strong></h4>
                <?php if (!empty($factureclient->factureavoirs)) : ?>
              <section class="content">
                <div class="row">
                  <div class="col-md-8">
                    <div class="box">
                      <div class="box-header with-border">
                    <table>            <div class="box-body">

                      <tr>
                            <th><?= __('Client ') ?></th>
                            <th><?= __('Facture ') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Remise') ?></th>

                            <th><?= __('Etat') ?></th>
                            <th><?= __('Pointdevente') ?></th>


                            <th><?= __('Depot ') ?></th>

                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($factureclient->factureavoirs as $factureavoirs) : ?>
                        <tr>
                            <td><?= h($factureavoirs->client_id) ?></td>
                            <td><?= h($factureavoirs->factureclient_id) ?></td>
                            <td><?= h($factureavoirs->date) ?></td>
                            <td><?= h($factureavoirs->remise) ?></td>
                            <td><?= h($factureavoirs->etat) ?></td>
                            <td><?= h($factureavoirs->pointdevente_id) ?></td>


                            <td><?= h($factureavoirs->depot_id) ?></td>

                            <td class="actions">
                              <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $factureavoirs->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
