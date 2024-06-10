<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Destruction $destruction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Destruction'), ['action' => 'edit', $destruction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Destruction'), ['action' => 'delete', $destruction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $destruction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Destructions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Destruction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="destructions view content">
            <h3><?= h($destruction->Depot_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $destruction->has('depot') ? $this->Html->link($destruction->depot->nom, ['controller' => 'Depots', 'action' => 'view', $destruction->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($destruction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($destruction->Date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
