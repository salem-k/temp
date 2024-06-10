<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Repgro $repgro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Repgro'), ['action' => 'edit', $repgro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Repgro'), ['action' => 'delete', $repgro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repgro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Repgros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Repgro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="repgros view content">
            <h3><?= h($repgro->Responsable) ?></h3>
            <table>
                <tr>
                    <th><?= __('Responsable') ?></th>
                    <td><?= h($repgro->Responsable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsable Id') ?></th>
                    <td><?= h($repgro->Responsable_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($repgro->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
