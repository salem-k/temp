<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Paiement> $paiements
 */
?>
<div class="paiements index content">
    <?= $this->Html->link(__('New Paiement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Paiements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('typepaiement_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($paiements as $paiement): ?>
                <tr>
                    <td><?= $this->Number->format($paiement->id) ?></td>
                    <td><?= h($paiement->name) ?></td>
                    <td><?= $paiement->has('typepaiement') ? $this->Html->link($paiement->typepaiement->name, ['controller' => 'Typepaiements', 'action' => 'view', $paiement->typepaiement->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $paiement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paiement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]) ?>
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
