<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pointdevente> $pointdeventes
 */
?>
<div class="pointdeventes index content">
    <?= $this->Html->link(__('New Pointdevente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pointdeventes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('adresse') ?></th>
                    <th><?= $this->Paginator->sort('ville_id') ?></th>
                    <th><?= $this->Paginator->sort('matriclefiscale') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pointdeventes as $pointdevente): ?>
                <tr>
                    <td><?= $this->Number->format($pointdevente->id) ?></td>
                    <td><?= h($pointdevente->code) ?></td>
                    <td><?= h($pointdevente->name) ?></td>
                    <td><?= h($pointdevente->adresse) ?></td>
                    <td><?= $pointdevente->ville_id === null ? '' : $this->Number->format($pointdevente->ville_id) ?></td>
                    <td><?= h($pointdevente->matriclefiscale) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pointdevente->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pointdevente->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pointdevente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pointdevente->id)]) ?>
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
