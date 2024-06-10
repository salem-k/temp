<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commandefournisseur $commandefournisseur
 * @var string[]|\Cake\Collection\CollectionInterface $demandeoffredeprixes
 * @var string[]|\Cake\Collection\CollectionInterface $fournisseurs
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 * @var string[]|\Cake\Collection\CollectionInterface $factures
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commandefournisseur->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commandefournisseur->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Commandefournisseurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandefournisseurs form content">
            <?= $this->Form->create($commandefournisseur) ?>
            <fieldset>
                <legend><?= __('Edit Commandefournisseur') ?></legend>
                <?php
                    echo $this->Form->control('demandeoffredeprix_id', ['options' => $demandeoffredeprixes, 'empty' => true]);
                    echo $this->Form->control('numero');
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs, 'empty' => true]);
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
                    echo $this->Form->control('cartecarburant_id');
                    echo $this->Form->control('materieltransport_id');
                    echo $this->Form->control('chauffeur');
                    echo $this->Form->control('convoyeur');
                    echo $this->Form->control('valide');
                    echo $this->Form->control('remise');
                    echo $this->Form->control('tva');
                    echo $this->Form->control('fodec');
                    echo $this->Form->control('ttc');
                    echo $this->Form->control('ht');
                    echo $this->Form->control('livraison_id');
                    echo $this->Form->control('etatliv');
                    echo $this->Form->control('typecommande');
                    echo $this->Form->control('projet_id');
                    echo $this->Form->control('facture_id', ['options' => $factures, 'empty' => true]);
                    echo $this->Form->control('conteneur_id');
                    echo $this->Form->control('tvaOnOff');
                    echo $this->Form->control('envoiemail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
