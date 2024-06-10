<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Bonreceptionstock> $bonreceptionstocks
 */
?>
<div class="bonreceptionstocks index content">
    <?= $this->Html->link(__('New Bonreceptionstock'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bonreceptionstocks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('pointdevente_id') ?></th>
                    <th><?= $this->Paginator->sort('depot_id') ?></th>
                    <th><?= $this->Paginator->sort('materieltransport_id') ?></th>
                    <th><?= $this->Paginator->sort('cartecarburant_id') ?></th>
                    <th><?= $this->Paginator->sort('personnel_id') ?></th>
                    <th><?= $this->Paginator->sort('conffaieur_id') ?></th>
                    <th><?= $this->Paginator->sort('chauffeur_id') ?></th>
                    <th><?= $this->Paginator->sort('kilometragedepart') ?></th>
                    <th><?= $this->Paginator->sort('kilometragearrive') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bonreceptionstocks as $bonreceptionstock): ?>
                <tr>
                    <td><?= $this->Number->format($bonreceptionstock->id) ?></td>
                    <td><?= h($bonreceptionstock->numero) ?></td>
                    <td><?= h($bonreceptionstock->date) ?></td>
                    <td><?= $bonreceptionstock->has('pointdevente') ? $this->Html->link($bonreceptionstock->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $bonreceptionstock->pointdevente->id]) : '' ?></td>
                    <td><?= $bonreceptionstock->has('depot') ? $this->Html->link($bonreceptionstock->depot->nom, ['controller' => 'Depots', 'action' => 'view', $bonreceptionstock->depot->id]) : '' ?></td>
                    <td><?= $this->Number->format($bonreceptionstock->materieltransport_id) ?></td>
                    <td><?= $this->Number->format($bonreceptionstock->cartecarburant_id) ?></td>
                    <td><?= $bonreceptionstock->has('personnel') ? $this->Html->link($bonreceptionstock->personnel->id, ['controller' => 'Personnels', 'action' => 'view', $bonreceptionstock->personnel->id]) : '' ?></td>
                    <td><?= $this->Number->format($bonreceptionstock->conffaieur_id) ?></td>
                    <td><?= $this->Number->format($bonreceptionstock->chauffeur_id) ?></td>
                    <td><?= $this->Number->format($bonreceptionstock->kilometragedepart) ?></td>
                    <td><?= $this->Number->format($bonreceptionstock->kilometragearrive) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bonreceptionstock->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bonreceptionstock->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bonreceptionstock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bonreceptionstock->id)]) ?>
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
