<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commentaire $commentaire
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Commentaire'), ['action' => 'edit', $commentaire->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Commentaire'), ['action' => 'delete', $commentaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaire->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Commentaires'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Commentaire'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commentaires view content">
            <h3><?= h($commentaire->Description) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($commentaire->Description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Repgro') ?></th>
                    <td><?= $commentaire->has('repgro') ? $this->Html->link($commentaire->repgro->Responsable, ['controller' => 'Repgros', 'action' => 'view', $commentaire->repgro->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Repcommsects Id') ?></th>
                    <td><?= h($commentaire->repcommsects_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Replivreures Id') ?></th>
                    <td><?= h($commentaire->replivreures_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Repsectoriel') ?></th>
                    <td><?= $commentaire->has('repsectoriel') ? $this->Html->link($commentaire->repsectoriel->Responsable, ['controller' => 'Repsectoriels', 'action' => 'view', $commentaire->repsectoriel->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($commentaire->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($commentaire->Date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
