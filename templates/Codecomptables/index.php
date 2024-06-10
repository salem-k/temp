<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Codecomptable> $codecomptables
 */
?>
<div class="codecomptables index content">
    <?= $this->Html->link(__('New Codecomptable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Codecomptables') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('typecode') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($codecomptables as $codecomptable): ?>
                <tr>
                    <td><?= $this->Number->format($codecomptable->id) ?></td>
                    <td><?= h($codecomptable->name) ?></td>
                    <td><?= $codecomptable->typecode === null ? '' : $this->Number->format($codecomptable->typecode) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $codecomptable->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $codecomptable->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $codecomptable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $codecomptable->id)]) ?>
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
