<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Commentaire> $commentaires
 */
?>
<div class="commentaires index content">
    <?= $this->Html->link(__('New Commentaire'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Commentaires') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Description') ?></th>
                    <th><?= $this->Paginator->sort('Repgros_id') ?></th>
                    <th><?= $this->Paginator->sort('repcommsects_id') ?></th>
                    <th><?= $this->Paginator->sort('replivreures_id') ?></th>
                    <th><?= $this->Paginator->sort('Date') ?></th>
                    <th><?= $this->Paginator->sort('repsectoriel_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($commentaires as $commentaire): ?>
                <tr>
                    <td><?= $this->Number->format($commentaire->id) ?></td>
                    <td><?= h($commentaire->Description) ?></td>
                    <td><?= $commentaire->has('repgro') ? $this->Html->link($commentaire->repgro->Responsable, ['controller' => 'Repgros', 'action' => 'view', $commentaire->repgro->id]) : '' ?></td>
                    <td><?= h($commentaire->repcommsects_id) ?></td>
                    <td><?= h($commentaire->replivreures_id) ?></td>
                    <td><?= h($commentaire->Date) ?></td>
                    <td><?= $commentaire->has('repsectoriel') ? $this->Html->link($commentaire->repsectoriel->Responsable, ['controller' => 'Repsectoriels', 'action' => 'view', $commentaire->repsectoriel->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $commentaire->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commentaire->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commentaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaire->id)]) ?>
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
