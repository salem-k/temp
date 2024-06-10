<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bandeconsultation $bandeconsultation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bandeconsultation'), ['action' => 'edit', $bandeconsultation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bandeconsultation'), ['action' => 'delete', $bandeconsultation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bandeconsultation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bandeconsultations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bandeconsultation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bandeconsultations view content">
            <h3><?= h($bandeconsultation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Demandeoffredeprix') ?></th>
                    <td><?= $bandeconsultation->has('demandeoffredeprix') ? $this->Html->link($bandeconsultation->demandeoffredeprix->id, ['controller' => 'Demandeoffredeprixes', 'action' => 'view', $bandeconsultation->demandeoffredeprix->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fournisseur') ?></th>
                    <td><?= $bandeconsultation->has('fournisseur') ? $this->Html->link($bandeconsultation->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $bandeconsultation->fournisseur->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('NameF') ?></th>
                    <td><?= h($bandeconsultation->nameF) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codefrs') ?></th>
                    <td><?= h($bandeconsultation->codefrs) ?></td>
                </tr>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $bandeconsultation->has('article') ? $this->Html->link($bandeconsultation->article->id, ['controller' => 'Articles', 'action' => 'view', $bandeconsultation->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('DesigniationA') ?></th>
                    <td><?= h($bandeconsultation->designiationA) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bandeconsultation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qte') ?></th>
                    <td><?= $bandeconsultation->qte === null ? '' : $this->Number->format($bandeconsultation->qte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $bandeconsultation->prix === null ? '' : $this->Number->format($bandeconsultation->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalprix') ?></th>
                    <td><?= $bandeconsultation->totalprix === null ? '' : $this->Number->format($bandeconsultation->totalprix) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
