<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tach> $taches
 */
?>
<div class="taches index content">
    <?= $this->Html->link(__('New Tach'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Taches') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ref') ?></th>
                    <th><?= $this->Paginator->sort('libelle') ?></th>
                    <th><?= $this->Paginator->sort('projet_id') ?></th>
                    <th><?= $this->Paginator->sort('dated') ?></th>
                    <th><?= $this->Paginator->sort('datefin') ?></th>
                    <th><?= $this->Paginator->sort('duree') ?></th>
                    <th><?= $this->Paginator->sort('progression_id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('contact') ?></th>
                    <th><?= $this->Paginator->sort('dureem') ?></th>
                    <th><?= $this->Paginator->sort('personnel_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($taches as $tach): ?>
                <tr>
                    <td><?= $this->Number->format($tach->id) ?></td>
                    <td><?= h($tach->ref) ?></td>
                    <td><?= h($tach->libelle) ?></td>
                    <td><?= $tach->projet_id === null ? '' : $this->Number->format($tach->projet_id) ?></td>
                    <td><?= h($tach->dated) ?></td>
                    <td><?= h($tach->datefin) ?></td>
                    <td><?= h($tach->duree) ?></td>
                    <td><?= $tach->progression_id === null ? '' : $this->Number->format($tach->progression_id) ?></td>
                    <td><?= h($tach->description) ?></td>
                    <td><?= h($tach->contact) ?></td>
                    <td><?= h($tach->dureem) ?></td>
                    <td><?= $tach->has('personnel') ? $this->Html->link($tach->personnel->id, ['controller' => 'Personnels', 'action' => 'view', $tach->personnel->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tach->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tach->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tach->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tach->id)]) ?>
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
