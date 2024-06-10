<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dstock $dstock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dstock'), ['action' => 'edit', $dstock->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dstock'), ['action' => 'delete', $dstock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dstock->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dstocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dstock'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dstocks view content">
            <h3><?= h($dstock->dstock_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Dstock Id') ?></th>
                    <td><?= h($dstock->dstock_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dstock->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Dstocks') ?></h4>
                <?php if (!empty($dstock->dstocks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Dstock Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($dstock->dstocks as $dstocks) : ?>
                        <tr>
                            <td><?= h($dstocks->id) ?></td>
                            <td><?= h($dstocks->dstock_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Dstocks', 'action' => 'view', $dstocks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Dstocks', 'action' => 'edit', $dstocks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dstocks', 'action' => 'delete', $dstocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dstocks->id)]) ?>
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
