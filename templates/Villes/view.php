<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ville $ville
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ville'), ['action' => 'edit', $ville->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ville'), ['action' => 'delete', $ville->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ville->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Villes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ville'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="villes view content">
            <h3><?= h($ville->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($ville->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay') ?></th>
                    <td><?= $ville->has('pay') ? $this->Html->link($ville->pay->name, ['controller' => 'Pays', 'action' => 'view', $ville->pay->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ville->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Pointdeventes') ?></h4>
                <?php if (!empty($ville->pointdeventes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Adresse') ?></th>
                            <th><?= __('Ville Id') ?></th>
                            <th><?= __('Matriclefiscale') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ville->pointdeventes as $pointdeventes) : ?>
                        <tr>
                            <td><?= h($pointdeventes->id) ?></td>
                            <td><?= h($pointdeventes->code) ?></td>
                            <td><?= h($pointdeventes->name) ?></td>
                            <td><?= h($pointdeventes->adresse) ?></td>
                            <td><?= h($pointdeventes->ville_id) ?></td>
                            <td><?= h($pointdeventes->matriclefiscale) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pointdeventes', 'action' => 'view', $pointdeventes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pointdeventes', 'action' => 'edit', $pointdeventes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pointdeventes', 'action' => 'delete', $pointdeventes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pointdeventes->id)]) ?>
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
