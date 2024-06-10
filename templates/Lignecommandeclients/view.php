<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lignecommandeclient $lignecommandeclient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lignecommandeclient'), ['action' => 'edit', $lignecommandeclient->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lignecommandeclient'), ['action' => 'delete', $lignecommandeclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lignecommandeclient->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lignecommandeclients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lignecommandeclient'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lignecommandeclients view content">
            <h3><?= h($lignecommandeclient->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Commandeclient') ?></th>
                    <td><?= $lignecommandeclient->has('commandeclient') ? $this->Html->link($lignecommandeclient->commandeclient->code, ['controller' => 'Commandeclients', 'action' => 'view', $lignecommandeclient->commandeclient->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $lignecommandeclient->has('article') ? $this->Html->link($lignecommandeclient->article->id, ['controller' => 'Articles', 'action' => 'view', $lignecommandeclient->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lignecommandeclient->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtestock') ?></th>
                    <td><?= $lignecommandeclient->qtestock === null ? '' : $this->Number->format($lignecommandeclient->qtestock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qte') ?></th>
                    <td><?= $lignecommandeclient->qte === null ? '' : $this->Number->format($lignecommandeclient->qte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prixht') ?></th>
                    <td><?= $lignecommandeclient->prixht === null ? '' : $this->Number->format($lignecommandeclient->prixht) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remise') ?></th>
                    <td><?= $lignecommandeclient->remise === null ? '' : $this->Number->format($lignecommandeclient->remise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Punht') ?></th>
                    <td><?= $lignecommandeclient->punht === null ? '' : $this->Number->format($lignecommandeclient->punht) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tva') ?></th>
                    <td><?= $lignecommandeclient->tva === null ? '' : $this->Number->format($lignecommandeclient->tva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fodec') ?></th>
                    <td><?= $lignecommandeclient->fodec === null ? '' : $this->Number->format($lignecommandeclient->fodec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ttc') ?></th>
                    <td><?= $lignecommandeclient->ttc === null ? '' : $this->Number->format($lignecommandeclient->ttc) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
