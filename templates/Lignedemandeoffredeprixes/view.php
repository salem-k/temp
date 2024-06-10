<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lignedemandeoffredeprix $lignedemandeoffredeprix
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lignedemandeoffredeprix'), ['action' => 'edit', $lignedemandeoffredeprix->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lignedemandeoffredeprix'), ['action' => 'delete', $lignedemandeoffredeprix->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lignedemandeoffredeprix->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lignedemandeoffredeprixes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lignedemandeoffredeprix'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lignedemandeoffredeprixes view content">
            <h3><?= h($lignedemandeoffredeprix->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Demandeoffredeprix') ?></th>
                    <td><?= $lignedemandeoffredeprix->has('demandeoffredeprix') ? $this->Html->link($lignedemandeoffredeprix->demandeoffredeprix->id, ['controller' => 'Demandeoffredeprixes', 'action' => 'view', $lignedemandeoffredeprix->demandeoffredeprix->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $lignedemandeoffredeprix->has('article') ? $this->Html->link($lignedemandeoffredeprix->article->id, ['controller' => 'Articles', 'action' => 'view', $lignedemandeoffredeprix->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('DesigniationA') ?></th>
                    <td><?= h($lignedemandeoffredeprix->designiationA) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fournisseur') ?></th>
                    <td><?= $lignedemandeoffredeprix->has('fournisseur') ? $this->Html->link($lignedemandeoffredeprix->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $lignedemandeoffredeprix->fournisseur->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('NameF') ?></th>
                    <td><?= h($lignedemandeoffredeprix->nameF) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mail') ?></th>
                    <td><?= h($lignedemandeoffredeprix->mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lignedemandeoffredeprix->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qte') ?></th>
                    <td><?= $lignedemandeoffredeprix->qte === null ? '' : $this->Number->format($lignedemandeoffredeprix->qte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Envoiemail') ?></th>
                    <td><?= $lignedemandeoffredeprix->envoiemail === null ? '' : $this->Number->format($lignedemandeoffredeprix->envoiemail) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
