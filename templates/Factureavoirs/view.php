<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factureavoir $factureavoir
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
            <strong><h3><?= h($factureavoir->id) ?></strong></h3>
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
                    <td><?= $factureavoir->has('client') ? $this->Html->link($factureavoir->client->id, ['controller' => 'Clients', 'action' => 'view', $factureavoir->client->id]) : '' ?></td>
                </tr>

                <tr>
                    <th><?= __('Factureclient') ?></th>
                    <td><?= $factureavoir->has('factureclient') ? $this->Html->link($factureavoir->factureclient->id, ['controller' => 'Factureclients', 'action' => 'view', $factureavoir->factureclient->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($factureavoir->numero) ?></td>
                </tr>

                <tr>
                    <th><?= __('Typefacture') ?></th>
                    <td><?= $factureavoir->has('typefacture') ? $this->Html->link($factureavoir->typefacture->name, ['controller' => 'Typefactures', 'action' => 'view', $factureavoir->typefacture->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $factureavoir->has('pointdevente') ? $this->Html->link($factureavoir->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $factureavoir->pointdevente->id]) : '' ?></td>
                </tr>


                <tr>
                    <th><?= __('Adressclient') ?></th>
                    <td><?= h($factureavoir->adressclient) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matriculefiscaleclient') ?></th>
                    <td><?= h($factureavoir->matriculefiscaleclient) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telclient') ?></th>
                    <td><?= h($factureavoir->telclient) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typeclient') ?></th>
                    <td><?= $factureavoir->has('typeclient') ? $this->Html->link($factureavoir->typeclient->type, ['controller' => 'Typeclients', 'action' => 'view', $factureavoir->typeclient->id]) : '' ?></td>
                </tr>

                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $factureavoir->has('depot') ? $this->Html->link($factureavoir->depot->name, ['controller' => 'Depots', 'action' => 'view', $factureavoir->depot->id]) : '' ?></td>
                </tr>

                <tr>
                    <th><?= __('Totalht') ?></th>
                    <td><?= $factureavoir->totalht === null ? '' : $this->Number->format($factureavoir->totalht) ?></td>
                </tr>

                <tr>
                    <th><?= __('Montant Regle') ?></th>
                    <td><?= $this->Number->format($factureavoir->montant_regle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Etat') ?></th>
                    <td><?= $factureavoir->etat === null ? '' : $this->Number->format($factureavoir->etat) ?></td>
                </tr>



                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($factureavoir->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
