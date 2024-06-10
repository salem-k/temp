<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dstock> $dstocks
 */
?>
<div class="dstocks index content">
  <!--famesh add fl bons!-->
    <h3><?= __('Dstocks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('dstock_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dstocks as $dstock): ?>
                <tr>
                    <td><?= $this->Number->format($dstock->id) ?></td>
                    <td><?= h($dstock->dstock_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dstock->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dstock->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dstock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dstock->id)]) ?>
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
