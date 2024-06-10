<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factavoir $factavoir
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Factavoir'), ['action' => 'edit', $factavoir->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Factavoir'), ['action' => 'delete', $factavoir->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factavoir->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Factavoirs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Factavoir'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factavoirs view content">
            <h3><?= h($factavoir->client_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $factavoir->has('client') ? $this->Html->link($factavoir->client->nom, ['controller' => 'Clients', 'action' => 'view', $factavoir->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Facture') ?></th>
                    <td><?= $factavoir->has('facture') ? $this->Html->link($factavoir->facture->replivreures_id, ['controller' => 'Factures', 'action' => 'view', $factavoir->facture->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($factavoir->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Debut') ?></th>
                    <td><?= h($factavoir->Date_debut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Fin') ?></th>
                    <td><?= h($factavoir->Date_fin) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
