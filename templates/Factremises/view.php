<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factremise $factremise
 */
?>
<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
            <strong></strong><h3><?= h($factremise->client_id) ?></strong></h3>
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
                    <td><?= $factremise->has('client') ? $this->Html->link($factremise->client->nom, ['controller' => 'Clients', 'action' => 'view', $factremise->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Commentaire') ?></th>
                    <td><?= h($factremise->Commentaire) ?></td>
                </tr>

                <tr>
                    <th><?= __('Reduction%') ?></th>
                    <td><?= $this->Number->format($factremise->Reduction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($factremise->Date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
