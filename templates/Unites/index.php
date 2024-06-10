<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Unite> $unites
 */
?>
<div class="unites index content">
    <?= $this->Html->link(__('New Unite'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Unites') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('typeU') ?></th>
                    <th><?= $this->Paginator->sort('formule') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($unites as $unite): ?>
                <tr>
                    <td><?= $this->Number->format($unite->id) ?></td>
                    <td><?= h($unite->name) ?></td>
                    <td><?= h($unite->typeU) ?></td>
                    <td><?= h($unite->formule) ?></td>
                    <td><?= h($unite->reference) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $unite->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $unite->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unite->id)]) ?>
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
