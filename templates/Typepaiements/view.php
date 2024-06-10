<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typepaiement $typepaiement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Typepaiement'), ['action' => 'edit', $typepaiement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Typepaiement'), ['action' => 'delete', $typepaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typepaiement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Typepaiements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Typepaiement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typepaiements view content">
            <h3><?= h($typepaiement->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($typepaiement->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($typepaiement->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Paiements') ?></h4>
                <?php if (!empty($typepaiement->paiements)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Typepaiement Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($typepaiement->paiements as $paiements) : ?>
                        <tr>
                            <td><?= h($paiements->id) ?></td>
                            <td><?= h($paiements->name) ?></td>
                            <td><?= h($paiements->typepaiement_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Paiements', 'action' => 'view', $paiements->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Paiements', 'action' => 'edit', $paiements->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paiements', 'action' => 'delete', $paiements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiements->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
