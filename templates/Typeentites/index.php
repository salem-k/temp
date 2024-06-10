<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Typeentite> $typeentites
 */
?>
<div class="typeentites index content">
    <?= $this->Html->link(__('New Typeentite'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Typeentites') ?></h3>
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
                <?php foreach ($typeentites as $typeentite): ?>
                <tr>
                    <td><?= $this->Number->format($typeentite->id) ?></td>
                    <td><?= h($typeentite->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $typeentite->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeentite->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeentite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeentite->id)]) ?>
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
