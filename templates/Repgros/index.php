<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Repgro> $repgros
 */
?>
<div class="repgros index content">
    <?= $this->Html->link(__('New Repgro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Repgros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Responsable') ?></th>
                    <th><?= $this->Paginator->sort('Responsable_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($repgros as $repgro): ?>
                <tr>
                    <td><?= $this->Number->format($repgro->id) ?></td>
                    <td><?= h($repgro->Responsable) ?></td>
                    <td><?= h($repgro->Responsable_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $repgro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $repgro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $repgro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repgro->id)]) ?>
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
