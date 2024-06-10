<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fournisseur $fournisseur
 * @var \Cake\Collection\CollectionInterface|string[] $villes
 * @var \Cake\Collection\CollectionInterface|string[] $pays
 * @var \Cake\Collection\CollectionInterface|string[] $paiements
 * @var \Cake\Collection\CollectionInterface|string[] $delegations
 * @var \Cake\Collection\CollectionInterface|string[] $localites
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Fournisseurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fournisseurs form content">
            <?= $this->Form->create($fournisseur) ?>
            <fieldset>
                <legend><?= __('Add Fournisseur') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('typefournisseur_id');
                    echo $this->Form->control('typelocalisation_id');
                    echo $this->Form->control('compte_comptable');
                    echo $this->Form->control('ville_id', ['options' => $villes, 'empty' => true]);
                    echo $this->Form->control('codepostal');
                    echo $this->Form->control('region_id');
                    echo $this->Form->control('pay_id', ['options' => $pays, 'empty' => true]);
                    echo $this->Form->control('activite');
                    echo $this->Form->control('secteur');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('fax');
                    echo $this->Form->control('mail');
                    echo $this->Form->control('site');
                    echo $this->Form->control('paiement_id', ['options' => $paiements, 'empty' => true]);
                    echo $this->Form->control('devise_id');
                    echo $this->Form->control('typeutilisateur_id');
                    echo $this->Form->control('exo');
                    echo $this->Form->control('code');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('gouvernorat_id');
                    echo $this->Form->control('delegation_id', ['options' => $delegations, 'empty' => true]);
                    echo $this->Form->control('localite_id', ['options' => $localites, 'empty' => true]);
                    echo $this->Form->control('typetier_id');
                    echo $this->Form->control('typeentite_id');
                    echo $this->Form->control('villes');
                    echo $this->Form->control('prospect_id');
                    echo $this->Form->control('codecl');
                    echo $this->Form->control('fournisseur');
                    echo $this->Form->control('nomalternatif');
                    echo $this->Form->control('RC');
                    echo $this->Form->control('codedouane');
                    echo $this->Form->control('matricule_fiscale');
                    echo $this->Form->control('BAN');
                    echo $this->Form->control('ajusterTVA');
                    echo $this->Form->control('numTVA');
                    echo $this->Form->control('salari_id');
                    echo $this->Form->control('capital');
                    echo $this->Form->control('incoterm_id');
                    echo $this->Form->control('port');
                    echo $this->Form->control('tags');
                    echo $this->Form->control('commercial');
                    echo $this->Form->control('logo');
                    echo $this->Form->control('datemodification', ['empty' => true]);
                    echo $this->Form->control('categorie_id', ['options' => $categories, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
