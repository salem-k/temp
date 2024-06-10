<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tva> $tvas
 */
?>
<div class="tvas index content">
    <?= $this->Html->link(__('New Tva'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tvas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('valeur') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tvas as $tva): ?>
                <tr>
                    <td><?= $this->Number->format($tva->id) ?></td>
                    <td><?= h($tva->name) ?></td>
                    <td><?= h($tva->valeur) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tva->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tva->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tva->id)]) ?>
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
