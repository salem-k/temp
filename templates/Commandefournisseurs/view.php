<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commandefournisseur $commandefournisseur
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
            <strong></strong><h3><?= h($commandefournisseur->id) ?></strong></h3>
              <style>
                /* Add spacing between table rows */
                table {
                  border-collapse: separate;
                  border-spacing: 10px; /* Adjust as needed */
                }
              </style>
               <style>
                      /* Add spacing between table rows */
                      table {
                        border-collapse: separate;
                        border-spacing: 10px; /* Adjust as needed */
                      }
                    </style>
            <table>
                <tr>
                    <th><?= __('Demandeoffredeprix') ?></th>
                    <td><?= $commandefournisseur->has('demandeoffredeprix') ? $this->Html->link($commandefournisseur->demandeoffredeprix->id, ['controller' => 'Demandeoffredeprixes', 'action' => 'view', $commandefournisseur->demandeoffredeprix->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($commandefournisseur->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fournisseur') ?></th>
                    <td><?= $commandefournisseur->has('fournisseur') ? $this->Html->link($commandefournisseur->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $commandefournisseur->fournisseur->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $commandefournisseur->has('pointdevente') ? $this->Html->link($commandefournisseur->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $commandefournisseur->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $commandefournisseur->has('depot') ? $this->Html->link($commandefournisseur->depot->name, ['controller' => 'Depots', 'action' => 'view', $commandefournisseur->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Facture') ?></th>
                    <td><?= $commandefournisseur->has('facture') ? $this->Html->link($commandefournisseur->facture->id, ['controller' => 'Factures', 'action' => 'view', $commandefournisseur->facture->id]) : '' ?></td>
                </tr>


                <tr>
                    <th><?= __('Valide') ?></th>
                    <td><?= $this->Number->format($commandefournisseur->valide) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remise%') ?></th>
                    <td><?= $commandefournisseur->remise === null ? '' : $this->Number->format($commandefournisseur->remise) ?></td>
                </tr>

                <tr>
                    <th><?= __('Livraison Id') ?></th>
                    <td><?= $this->Number->format($commandefournisseur->livraison_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Etatliv') ?></th>
                    <td><?= $this->Number->format($commandefournisseur->etatliv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typecommande') ?></th>
                    <td><?= $commandefournisseur->typecommande === null ? '' : $this->Number->format($commandefournisseur->typecommande) ?></td>
                </tr>


                <tr>
                    <th><?= __('Envoiemail') ?></th>
                    <td><?= $commandefournisseur->envoiemail === null ? '' : $this->Number->format($commandefournisseur->envoiemail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($commandefournisseur->date) ?></td>
                </tr>
            </table>

        </div>
    </div>
</div>
