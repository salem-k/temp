<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reglementclient $reglementclient
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
            <strong><h3><?= h($reglementclient->emi) ?></strong></h3>
              <style>
                /* Add spacing between table rows */
                table {
                  border-collapse: separate;
                  border-spacing: 10px; /* Adjust as needed */
                }
              </style>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $reglementclient->has('client') ? $this->Html->link($reglementclient->client->id, ['controller' => 'Clients', 'action' => 'view', $reglementclient->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $reglementclient->has('pointdevente') ? $this->Html->link($reglementclient->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $reglementclient->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($reglementclient->numero) ?></td>
                </tr>


                <tr>
                    <th><?= __('Numeropieceintegre') ?></th>
                    <td><?= h($reglementclient->numeropieceintegre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Observation') ?></th>
                    <td><?= h($reglementclient->observation) ?></td>
                </tr>

                <tr>
                    <th><?= __('Montant') ?></th>
                    <td><?= $reglementclient->Montant === null ? '' : $this->Number->format($reglementclient->Montant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Montantaffecte') ?></th>
                    <td><?= $reglementclient->montantaffecte === null ? '' : $this->Number->format($reglementclient->montantaffecte) ?></td>
                </tr>

                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= $reglementclient->type === null ? '' : $this->Number->format($reglementclient->type) ?></td>
                </tr>



                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($reglementclient->Date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
