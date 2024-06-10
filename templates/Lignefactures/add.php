<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lignefacture $lignefacture
 * @var \Cake\Collection\CollectionInterface|string[] $factures
 * @var \Cake\Collection\CollectionInterface|string[] $fournisseurs
 * @var \Cake\Collection\CollectionInterface|string[] $articles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Lignefactures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lignefactures form content">
            <?= $this->Form->create($lignefacture) ?>
            <fieldset>
                <legend><?= __('Add Lignefacture') ?></legend>
                <?php
                    echo $this->Form->control('facture_id', ['options' => $factures, 'empty' => true]);
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs, 'empty' => true]);
                    echo $this->Form->control('codefrs');
                    echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
                    echo $this->Form->control('qte');
                    echo $this->Form->control('prix');
                    echo $this->Form->control('ht');
                    echo $this->Form->control('remise');
                    echo $this->Form->control('fodec');
                    echo $this->Form->control('tva');
                    echo $this->Form->control('ttc');
                    echo $this->Form->control('charge_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
