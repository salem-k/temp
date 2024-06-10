<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Destruction> $destructions
 */
?>
<div class="destructions index content">
    <?= $this->Html->link(__('New Destruction'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Destructions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Date') ?></th>
                    <th><?= $this->Paginator->sort('Depot_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($destructions as $destruction): ?>
                <tr>
                    <td><?= $this->Number->format($destruction->id) ?></td>
                    <td><?= h($destruction->Date) ?></td>
                    <td><?= $destruction->has('depot') ? $this->Html->link($destruction->depot->nom, ['controller' => 'Depots', 'action' => 'view', $destruction->depot->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $destruction->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $destruction->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $destruction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $destruction->id)]) ?>
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
