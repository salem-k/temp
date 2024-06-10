<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Factavoir> $factavoirs
 */
?>
<div class="factavoirs index content">
    <?= $this->Html->link(__('New Factavoir'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Factavoirs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Date_debut') ?></th>
                    <th><?= $this->Paginator->sort('Date_fin') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('facture_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($factavoirs as $factavoir): ?>
                <tr>
                    <td><?= $this->Number->format($factavoir->id) ?></td>
                    <td><?= h($factavoir->Date_debut) ?></td>
                    <td><?= h($factavoir->Date_fin) ?></td>
                    <td><?= $factavoir->has('client') ? $this->Html->link($factavoir->client->nom, ['controller' => 'Clients', 'action' => 'view', $factavoir->client->id]) : '' ?></td>
                    <td><?= $factavoir->has('facture') ? $this->Html->link($factavoir->facture->replivreures_id, ['controller' => 'Factures', 'action' => 'view', $factavoir->facture->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $factavoir->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $factavoir->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $factavoir->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factavoir->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
