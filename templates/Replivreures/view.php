<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Replivreure $replivreure
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Replivreure'), ['action' => 'edit', $replivreure->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Replivreure'), ['action' => 'delete', $replivreure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $replivreure->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Replivreures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Replivreure'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="replivreures view content">
            <h3><?= h($replivreure->Responsable) ?></h3>
            <table>
                <tr>
                    <th><?= __('Responsable') ?></th>
                    <td><?= h($replivreure->Responsable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($replivreure->Adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($replivreure->Username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($replivreure->Password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($replivreure->Email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Voiture') ?></th>
                    <td><?= h($replivreure->Voiture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categorie') ?></th>
                    <td><?= h($replivreure->Categorie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $replivreure->has('depot') ? $this->Html->link($replivreure->depot->nom, ['controller' => 'Depots', 'action' => 'view', $replivreure->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($replivreure->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone') ?></th>
                    <td><?= $this->Number->format($replivreure->Telephone) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
