<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lignebandeconsultation $lignebandeconsultation
 * @var \Cake\Collection\CollectionInterface|string[] $demandeoffredeprixes
 * @var \Cake\Collection\CollectionInterface|string[] $bandeconsultations
 * @var \Cake\Collection\CollectionInterface|string[] $lignedemandeoffredeprixes
 * @var \Cake\Collection\CollectionInterface|string[] $fournisseurs
 * @var \Cake\Collection\CollectionInterface|string[] $articles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Lignebandeconsultations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lignebandeconsultations form content">
            <?= $this->Form->create($lignebandeconsultation) ?>
            <fieldset>
                <legend><?= __('Add Lignebandeconsultation') ?></legend>
                <?php
                    echo $this->Form->control('demandeoffredeprix_id', ['options' => $demandeoffredeprixes, 'empty' => true]);
                    echo $this->Form->control('bandeconsultation_id', ['options' => $bandeconsultations, 'empty' => true]);
                    echo $this->Form->control('lignedemandeoffredeprix_id', ['options' => $lignedemandeoffredeprixes, 'empty' => true]);
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs, 'empty' => true]);
                    echo $this->Form->control('nameF');
                    echo $this->Form->control('codefrs');
                    echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
                    echo $this->Form->control('designiationA');
                    echo $this->Form->control('qte');
                    echo $this->Form->control('prix');
                    echo $this->Form->control('ht');
                    echo $this->Form->control('tauxdemarge');
                    echo $this->Form->control('tauxdemarque');
                    echo $this->Form->control('coutrevient');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
