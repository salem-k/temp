<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Repcommsect> $repcommsects
 */
?>
<div class="repcommsects index content">
    <?= $this->Html->link(__('New Repcommsect'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Repcommsects') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Responsable') ?></th>
                    <th><?= $this->Paginator->sort('Telephone') ?></th>
                    <th><?= $this->Paginator->sort('Adresse') ?></th>
                    <th><?= $this->Paginator->sort('Username') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('Password') ?></th>
                    <th><?= $this->Paginator->sort('Voiture') ?></th>
                    <th><?= $this->Paginator->sort('Activity') ?></th>
                    <th><?= $this->Paginator->sort('depot_id') ?></th>
                    <th><?= $this->Paginator->sort('Responsable_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($repcommsects as $repcommsect): ?>
                <tr>
                    <td><?= $this->Number->format($repcommsect->id) ?></td>
                    <td><?= h($repcommsect->Responsable) ?></td>
                    <td><?= $this->Number->format($repcommsect->Telephone) ?></td>
                    <td><?= h($repcommsect->Adresse) ?></td>
                    <td><?= h($repcommsect->Username) ?></td>
                    <td><?= h($repcommsect->Email) ?></td>
                    <td><?= h($repcommsect->Password) ?></td>
                    <td><?= h($repcommsect->Voiture) ?></td>
                    <td><?= h($repcommsect->Activity) ?></td>
                    <td><?= $repcommsect->has('depot') ? $this->Html->link($repcommsect->depot->nom, ['controller' => 'Depots', 'action' => 'view', $repcommsect->depot->id]) : '' ?></td>
                    <td><?= h($repcommsect->Responsable_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $repcommsect->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $repcommsect->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $repcommsect->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repcommsect->id)]) ?>
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
