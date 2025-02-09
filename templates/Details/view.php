<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detail $detail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Detail'), ['action' => 'edit', $detail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detail'), ['action' => 'delete', $detail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="details view content">
            <h3><?= h($detail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Commande') ?></th>
                    <td><?= $detail->has('commande') ? $this->Html->link($detail->commande->reference, ['controller' => 'Commandes', 'action' => 'view', $detail->commande->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $detail->has('article') ? $this->Html->link($detail->article->id, ['controller' => 'Articles', 'action' => 'view', $detail->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($detail->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
