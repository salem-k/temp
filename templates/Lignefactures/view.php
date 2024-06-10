<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lignefacture $lignefacture
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lignefacture'), ['action' => 'edit', $lignefacture->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lignefacture'), ['action' => 'delete', $lignefacture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lignefacture->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lignefactures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lignefacture'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lignefactures view content">
            <h3><?= h($lignefacture->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Facture') ?></th>
                    <td><?= $lignefacture->has('facture') ? $this->Html->link($lignefacture->facture->id, ['controller' => 'Factures', 'action' => 'view', $lignefacture->facture->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fournisseur') ?></th>
                    <td><?= $lignefacture->has('fournisseur') ? $this->Html->link($lignefacture->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $lignefacture->fournisseur->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Codefrs') ?></th>
                    <td><?= h($lignefacture->codefrs) ?></td>
                </tr>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $lignefacture->has('article') ? $this->Html->link($lignefacture->article->id, ['controller' => 'Articles', 'action' => 'view', $lignefacture->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lignefacture->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qte') ?></th>
                    <td><?= $lignefacture->qte === null ? '' : $this->Number->format($lignefacture->qte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $lignefacture->prix === null ? '' : $this->Number->format($lignefacture->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ht') ?></th>
                    <td><?= $lignefacture->ht === null ? '' : $this->Number->format($lignefacture->ht) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remise') ?></th>
                    <td><?= $lignefacture->remise === null ? '' : $this->Number->format($lignefacture->remise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fodec') ?></th>
                    <td><?= $lignefacture->fodec === null ? '' : $this->Number->format($lignefacture->fodec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tva') ?></th>
                    <td><?= $lignefacture->tva === null ? '' : $this->Number->format($lignefacture->tva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ttc') ?></th>
                    <td><?= $lignefacture->ttc === null ? '' : $this->Number->format($lignefacture->ttc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Charge Id') ?></th>
                    <td><?= $lignefacture->charge_id === null ? '' : $this->Number->format($lignefacture->charge_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
