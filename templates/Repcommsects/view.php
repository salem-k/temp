<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Repcommsect $repcommsect
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Repcommsect'), ['action' => 'edit', $repcommsect->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Repcommsect'), ['action' => 'delete', $repcommsect->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repcommsect->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Repcommsects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Repcommsect'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="repcommsects view content">
            <h3><?= h($repcommsect->Responsable) ?></h3>
            <table>
                <tr>
                    <th><?= __('Responsable') ?></th>
                    <td><?= h($repcommsect->Responsable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($repcommsect->Adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($repcommsect->Username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($repcommsect->Email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($repcommsect->Password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Voiture') ?></th>
                    <td><?= h($repcommsect->Voiture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activity') ?></th>
                    <td><?= h($repcommsect->Activity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $repcommsect->has('depot') ? $this->Html->link($repcommsect->depot->nom, ['controller' => 'Depots', 'action' => 'view', $repcommsect->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsable Id') ?></th>
                    <td><?= h($repcommsect->Responsable_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($repcommsect->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone') ?></th>
                    <td><?= $this->Number->format($repcommsect->Telephone) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
