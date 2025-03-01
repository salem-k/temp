<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet $projet
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 * @var \Cake\Collection\CollectionInterface|string[] $commercials
 * @var \Cake\Collection\CollectionInterface|string[] $personnels
 * @var \Cake\Collection\CollectionInterface|string[] $devises
 * @var \Cake\Collection\CollectionInterface|string[] $banques
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Projets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projets form content">
            <?= $this->Form->create($projet) ?>
            <fieldset>
                <legend><?= __('Add Projet') ?></legend>
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('libelle');
                    echo $this->Form->control('datefin', ['empty' => true]);
                    echo $this->Form->control('visibilite');
                    echo $this->Form->control('probabilite');
                    echo $this->Form->control('montant');
                    echo $this->Form->control('budget');
                    echo $this->Form->control('opportunite_id');
                    echo $this->Form->control('description');
                    echo $this->Form->control('commercial_id', ['options' => $commercials, 'empty' => true]);
                    echo $this->Form->control('personnel_id', ['options' => $personnels, 'empty' => true]);
                    echo $this->Form->control('valide');
                    echo $this->Form->control('devise_id', ['options' => $devises, 'empty' => true]);
                    echo $this->Form->control('banque_id', ['options' => $banques, 'empty' => true]);
                    echo $this->Form->control('suivre_opportunite');
                    echo $this->Form->control('suivre_tache');
                    echo $this->Form->control('facturer_temps_passe');
                    echo $this->Form->control('datemodification', ['empty' => true]);
                    echo $this->Form->control('etatTache');
                    echo $this->Form->control('tagcategorie_id');
                    echo $this->Form->control('lien');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
