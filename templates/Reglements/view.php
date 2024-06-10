<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reglement $reglement
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
            <strong></strong><h3><?= h($reglement->id) ?></strong></h3>
              <style>
                /* Add spacing between table rows */
                table {
                  border-collapse: separate;
                  border-spacing: 10px; /* Adjust as needed */
                }
              </style>
            <table>
                <tr>
                    <th><?= __('Numeroconca') ?></th>
                    <td><?= h($reglement->numeroconca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fournisseur') ?></th>
                    <td><?= $reglement->has('fournisseur') ? $this->Html->link($reglement->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $reglement->fournisseur->id]) : '' ?></td>
                </tr>

                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($reglement->designation) ?></td>
                </tr>

                <tr>
                    <th><?= __('Devise') ?></th>
                    <td><?= $reglement->has('devise') ? $this->Html->link($reglement->devise->name, ['controller' => 'Devises', 'action' => 'view', $reglement->devise->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $reglement->has('pointdevente') ? $this->Html->link($reglement->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $reglement->pointdevente->id]) : '' ?></td>
                </tr>

                <tr>
                    <th><?= __('Montant') ?></th>
                    <td><?= $reglement->Montant === null ? '' : $this->Number->format($reglement->Montant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importation Id') ?></th>
                    <td><?= $reglement->importation_id === null ? '' : $this->Number->format($reglement->importation_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Montantdevise') ?></th>
                    <td><?= $reglement->montantdevise === null ? '' : $this->Number->format($reglement->montantdevise) ?></td>
                </tr>

                <tr>
                    <th><?= __('Impaye') ?></th>
                    <td><?= $reglement->impaye === null ? '' : $this->Number->format($reglement->impaye) ?></td>
                </tr>
                <tr>
                    <th><?= __('Differance') ?></th>
                    <td><?= $reglement->differance === null ? '' : $this->Number->format($reglement->differance) ?></td>
                </tr>

                <tr>
                    <th><?= __('Taux') ?></th>
                    <td><?= $reglement->taux === null ? '' : $this->Number->format($reglement->taux) ?></td>
                </tr>

                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($reglement->Date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
