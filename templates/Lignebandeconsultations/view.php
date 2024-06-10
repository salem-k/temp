<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lignebandeconsultation $lignebandeconsultation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lignebandeconsultation'), ['action' => 'edit', $lignebandeconsultation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lignebandeconsultation'), ['action' => 'delete', $lignebandeconsultation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lignebandeconsultation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lignebandeconsultations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lignebandeconsultation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lignebandeconsultations view content">
            <h3><?= h($lignebandeconsultation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Demandeoffredeprix') ?></th>
                    <td><?= $lignebandeconsultation->has('demandeoffredeprix') ? $this->Html->link($lignebandeconsultation->demandeoffredeprix->id, ['controller' => 'Demandeoffredeprixes', 'action' => 'view', $lignebandeconsultation->demandeoffredeprix->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Bandeconsultation') ?></th>
                    <td><?= $lignebandeconsultation->has('bandeconsultation') ? $this->Html->link($lignebandeconsultation->bandeconsultation->id, ['controller' => 'Bandeconsultations', 'action' => 'view', $lignebandeconsultation->bandeconsultation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lignedemandeoffredeprix') ?></th>
                    <td><?= $lignebandeconsultation->has('lignedemandeoffredeprix') ? $this->Html->link($lignebandeconsultation->lignedemandeoffredeprix->id, ['controller' => 'Lignedemandeoffredeprixes', 'action' => 'view', $lignebandeconsultation->lignedemandeoffredeprix->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fournisseur') ?></th>
                    <td><?= $lignebandeconsultation->has('fournisseur') ? $this->Html->link($lignebandeconsultation->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $lignebandeconsultation->fournisseur->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('NameF') ?></th>
                    <td><?= h($lignebandeconsultation->nameF) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codefrs') ?></th>
                    <td><?= h($lignebandeconsultation->codefrs) ?></td>
                </tr>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $lignebandeconsultation->has('article') ? $this->Html->link($lignebandeconsultation->article->id, ['controller' => 'Articles', 'action' => 'view', $lignebandeconsultation->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('DesigniationA') ?></th>
                    <td><?= h($lignebandeconsultation->designiationA) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lignebandeconsultation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qte') ?></th>
                    <td><?= $lignebandeconsultation->qte === null ? '' : $this->Number->format($lignebandeconsultation->qte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $lignebandeconsultation->prix === null ? '' : $this->Number->format($lignebandeconsultation->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ht') ?></th>
                    <td><?= $lignebandeconsultation->ht === null ? '' : $this->Number->format($lignebandeconsultation->ht) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tauxdemarge') ?></th>
                    <td><?= $lignebandeconsultation->tauxdemarge === null ? '' : $this->Number->format($lignebandeconsultation->tauxdemarge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tauxdemarque') ?></th>
                    <td><?= $lignebandeconsultation->tauxdemarque === null ? '' : $this->Number->format($lignebandeconsultation->tauxdemarque) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coutrevient') ?></th>
                    <td><?= $lignebandeconsultation->coutrevient === null ? '' : $this->Number->format($lignebandeconsultation->coutrevient) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
