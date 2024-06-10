<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Salari> $salaris
 */
?>
<div class="salaris index content">
    <?= $this->Html->link(__('New Salari'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Salaris') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salaris as $salari): ?>
                <tr>
                    <td><?= $this->Number->format($salari->id) ?></td>
                    <td><?= h($salari->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $salari->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salari->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salari->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salari->id)]) ?>
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
