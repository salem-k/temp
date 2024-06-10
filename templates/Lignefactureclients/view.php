<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lignefactureclient $lignefactureclient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lignefactureclient'), ['action' => 'edit', $lignefactureclient->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lignefactureclient'), ['action' => 'delete', $lignefactureclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lignefactureclient->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lignefactureclients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lignefactureclient'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lignefactureclients view content">
            <h3><?= h($lignefactureclient->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Factureclient') ?></th>
                    <td><?= $lignefactureclient->has('factureclient') ? $this->Html->link($lignefactureclient->factureclient->id, ['controller' => 'Factureclients', 'action' => 'view', $lignefactureclient->factureclient->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $lignefactureclient->has('article') ? $this->Html->link($lignefactureclient->article->id, ['controller' => 'Articles', 'action' => 'view', $lignefactureclient->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lignefactureclient->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qte') ?></th>
                    <td><?= $this->Number->format($lignefactureclient->qte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prixht') ?></th>
                    <td><?= $this->Number->format($lignefactureclient->prixht) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remise') ?></th>
                    <td><?= $lignefactureclient->remise === null ? '' : $this->Number->format($lignefactureclient->remise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Punht') ?></th>
                    <td><?= $this->Number->format($lignefactureclient->punht) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tva') ?></th>
                    <td><?= $lignefactureclient->tva === null ? '' : $this->Number->format($lignefactureclient->tva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fodec') ?></th>
                    <td><?= $lignefactureclient->fodec === null ? '' : $this->Number->format($lignefactureclient->fodec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ttc') ?></th>
                    <td><?= $lignefactureclient->ttc === null ? '' : $this->Number->format($lignefactureclient->ttc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtestock') ?></th>
                    <td><?= $lignefactureclient->qtestock === null ? '' : $this->Number->format($lignefactureclient->qtestock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totaltva') ?></th>
                    <td><?= $lignefactureclient->totaltva === null ? '' : $this->Number->format($lignefactureclient->totaltva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalttc') ?></th>
                    <td><?= $lignefactureclient->totalttc === null ? '' : $this->Number->format($lignefactureclient->totalttc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Montantht') ?></th>
                    <td><?= $lignefactureclient->montantht === null ? '' : $this->Number->format($lignefactureclient->montantht) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
