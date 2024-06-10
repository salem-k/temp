<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lien $lien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lien'), ['action' => 'edit', $lien->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lien'), ['action' => 'delete', $lien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lien->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Liens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lien'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="liens view content">
            <h3><?= h($lien->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lien') ?></th>
                    <td><?= h($lien->lien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ajout') ?></th>
                    <td><?= h($lien->ajout) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modif') ?></th>
                    <td><?= h($lien->modif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supp') ?></th>
                    <td><?= h($lien->supp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imprimer') ?></th>
                    <td><?= h($lien->imprimer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lien->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Utilisateurmenu Id') ?></th>
                    <td><?= $lien->utilisateurmenu_id === null ? '' : $this->Number->format($lien->utilisateurmenu_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valide') ?></th>
                    <td><?= $lien->valide === null ? '' : $this->Number->format($lien->valide) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
