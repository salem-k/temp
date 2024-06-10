<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articlefournisseur $articlefournisseur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Articlefournisseur'), ['action' => 'edit', $articlefournisseur->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Articlefournisseur'), ['action' => 'delete', $articlefournisseur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlefournisseur->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articlefournisseurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Articlefournisseur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articlefournisseurs view content">
            <h3><?= h($articlefournisseur->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Fournisseur') ?></th>
                    <td><?= $articlefournisseur->has('fournisseur') ? $this->Html->link($articlefournisseur->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $articlefournisseur->fournisseur->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($articlefournisseur->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $articlefournisseur->has('article') ? $this->Html->link($articlefournisseur->article->id, ['controller' => 'Articles', 'action' => 'view', $articlefournisseur->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($articlefournisseur->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $articlefournisseur->prix === null ? '' : $this->Number->format($articlefournisseur->prix) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
