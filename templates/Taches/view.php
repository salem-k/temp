<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tach $tach
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tach'), ['action' => 'edit', $tach->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tach'), ['action' => 'delete', $tach->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tach->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Taches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tach'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="taches view content">
            <h3><?= h($tach->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ref') ?></th>
                    <td><?= h($tach->ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Libelle') ?></th>
                    <td><?= h($tach->libelle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duree') ?></th>
                    <td><?= h($tach->duree) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($tach->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact') ?></th>
                    <td><?= h($tach->contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dureem') ?></th>
                    <td><?= h($tach->dureem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Personnel') ?></th>
                    <td><?= $tach->has('personnel') ? $this->Html->link($tach->personnel->id, ['controller' => 'Personnels', 'action' => 'view', $tach->personnel->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tach->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Projet Id') ?></th>
                    <td><?= $tach->projet_id === null ? '' : $this->Number->format($tach->projet_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Progression Id') ?></th>
                    <td><?= $tach->progression_id === null ? '' : $this->Number->format($tach->progression_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dated') ?></th>
                    <td><?= h($tach->dated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datefin') ?></th>
                    <td><?= h($tach->datefin) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
