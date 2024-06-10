<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Replivreure> $replivreures
 */
?>
<div class="replivreures index content">
    <?= $this->Html->link(__('New Replivreure'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Replivreures') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Responsable') ?></th>
                    <th><?= $this->Paginator->sort('Adresse') ?></th>
                    <th><?= $this->Paginator->sort('Username') ?></th>
                    <th><?= $this->Paginator->sort('Password') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('Voiture') ?></th>
                    <th><?= $this->Paginator->sort('Categorie') ?></th>
                    <th><?= $this->Paginator->sort('Telephone') ?></th>
                    <th><?= $this->Paginator->sort('Depot_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($replivreures as $replivreure): ?>
                <tr>
                    <td><?= $this->Number->format($replivreure->id) ?></td>
                    <td><?= h($replivreure->Responsable) ?></td>
                    <td><?= h($replivreure->Adresse) ?></td>
                    <td><?= h($replivreure->Username) ?></td>
                    <td><?= h($replivreure->Password) ?></td>
                    <td><?= h($replivreure->Email) ?></td>
                    <td><?= h($replivreure->Voiture) ?></td>
                    <td><?= h($replivreure->Categorie) ?></td>
                    <td><?= $this->Number->format($replivreure->Telephone) ?></td>
                    <td><?= $replivreure->has('depot') ? $this->Html->link($replivreure->depot->nom, ['controller' => 'Depots', 'action' => 'view', $replivreure->depot->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $replivreure->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $replivreure->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $replivreure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $replivreure->id)]) ?>
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
