<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demandeoffredeprix $demandeoffredeprix
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
            <strong><h3><?= h($demandeoffredeprix->id) ?></strong></h3>
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
                    <td><?= h($demandeoffredeprix->numero) ?></td>
                </tr>

                <tr>
                    <th><?= __('Consultation') ?></th>
                    <td><?= $this->Number->format($demandeoffredeprix->consultation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commande') ?></th>
                    <td><?= $this->Number->format($demandeoffredeprix->commande) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typeoffredeprix') ?></th>
                    <td><?= $demandeoffredeprix->typeoffredeprix === null ? '' : $this->Number->format($demandeoffredeprix->typeoffredeprix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Projet Id') ?></th>
                    <td><?= $demandeoffredeprix->projet_id === null ? '' : $this->Number->format($demandeoffredeprix->projet_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commandeclient') ?></th>
                    <td><?= $demandeoffredeprix->commandeclient === null ? '' : $this->Number->format($demandeoffredeprix->commandeclient) ?></td>
                </tr>
                <tr>
                    <th><?= __('Envoiemail') ?></th>
                    <td><?= $demandeoffredeprix->envoiemail === null ? '' : $this->Number->format($demandeoffredeprix->envoiemail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($demandeoffredeprix->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
