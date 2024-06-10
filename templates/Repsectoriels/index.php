<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Repsectoriel> $repsectoriels
 */
?>
<div class="repsectoriels index content">
    <?= $this->Html->link(__('New Repsectoriel'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Repsectoriels') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Responsable') ?></th>
                    <th><?= $this->Paginator->sort('Numero_telephone') ?></th>
                    <th><?= $this->Paginator->sort('Username') ?></th>
                    <th><?= $this->Paginator->sort('Password') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('Voiture') ?></th>
                    <th><?= $this->Paginator->sort('Categorie') ?></th>
                    <th><?= $this->Paginator->sort('Remplacant_id') ?></th>
                    <th><?= $this->Paginator->sort('Activity') ?></th>
                    <th><?= $this->Paginator->sort('depotttt_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($repsectoriels as $repsectoriel): ?>
                <tr>
                    <td><?= $this->Number->format($repsectoriel->id) ?></td>
                    <td><?= h($repsectoriel->Responsable) ?></td>
                    <td><?= $this->Number->format($repsectoriel->Numero_telephone) ?></td>
                    <td><?= h($repsectoriel->Username) ?></td>
                    <td><?= h($repsectoriel->Password) ?></td>
                    <td><?= h($repsectoriel->Email) ?></td>
                    <td><?= h($repsectoriel->Voiture) ?></td>
                    <td><?= h($repsectoriel->Categorie) ?></td>
                    <td><?= h($repsectoriel->Remplacant_id) ?></td>
                    <td><?= h($repsectoriel->Activity) ?></td>
                    <td><?= h($repsectoriel->depotttt_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $repsectoriel->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $repsectoriel->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $repsectoriel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repsectoriel->id)]) ?>
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
