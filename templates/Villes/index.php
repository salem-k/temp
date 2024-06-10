<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ville> $villes
 */
?>
<div class="villes index content">
    <?= $this->Html->link(__('New Ville'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Villes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('pay_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($villes as $ville): ?>
                <tr>
                    <td><?= $this->Number->format($ville->id) ?></td>
                    <td><?= h($ville->name) ?></td>
                    <td><?= $ville->has('pay') ? $this->Html->link($ville->pay->name, ['controller' => 'Pays', 'action' => 'view', $ville->pay->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ville->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ville->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ville->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ville->id)]) ?>
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
