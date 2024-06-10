<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reglement $reglement
 * @var string[]|\Cake\Collection\CollectionInterface $fournisseurs
 * @var string[]|\Cake\Collection\CollectionInterface $utilisateurs
 * @var string[]|\Cake\Collection\CollectionInterface $devises
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reglement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reglement->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Reglements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reglements form content">
            <?= $this->Form->create($reglement) ?>
            <fieldset>
                <legend><?= __('Edit Reglement') ?></legend>
                <?php
                    echo $this->Form->control('numeroconca');
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs, 'empty' => true]);
                    echo $this->Form->control('Date', ['empty' => true]);
                    echo $this->Form->control('Montant');
                    echo $this->Form->control('importation_id');
                    echo $this->Form->control('montantdevise');
                    echo $this->Form->control('libre');
                    echo $this->Form->control('utilisateur_id', ['options' => $utilisateurs, 'empty' => true]);
                    echo $this->Form->control('exercice_id');
                    echo $this->Form->control('designation');
                    echo $this->Form->control('impaye');
                    echo $this->Form->control('differance');
                    echo $this->Form->control('numeropieceintegre');
                    echo $this->Form->control('RG_NO');
                    echo $this->Form->control('devise_id', ['options' => $devises, 'empty' => true]);
                    echo $this->Form->control('taux');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('projet_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
