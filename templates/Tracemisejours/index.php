<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tracemisejour> $tracemisejours
 */
?>
<div class="tracemisejours index content">
    <?= $this->Html->link(__('New Tracemisejour'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tracemisejours') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('id_piece') ?></th>
                    <th><?= $this->Paginator->sort('operation') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('utilisateur_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('heure') ?></th>
                    <th><?= $this->Paginator->sort('poste') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tracemisejours as $tracemisejour): ?>
                <tr>
                    <td><?= $this->Number->format($tracemisejour->id) ?></td>
                    <td><?= h($tracemisejour->model) ?></td>
                    <td><?= h($tracemisejour->id_piece) ?></td>
                    <td><?= h($tracemisejour->operation) ?></td>
                    <td><?= h($tracemisejour->numero) ?></td>
                    <td><?= $tracemisejour->has('utilisateur') ? $this->Html->link($tracemisejour->utilisateur->name, ['controller' => 'Utilisateurs', 'action' => 'view', $tracemisejour->utilisateur->id]) : '' ?></td>
                    <td><?= h($tracemisejour->date) ?></td>
                    <td><?= h($tracemisejour->heure) ?></td>
                    <td><?= h($tracemisejour->poste) ?></td>
                    <td><?= $tracemisejour->has('user') ? $this->Html->link($tracemisejour->user->name, ['controller' => 'Users', 'action' => 'view', $tracemisejour->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tracemisejour->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tracemisejour->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tracemisejour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tracemisejour->id)]) ?>
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
