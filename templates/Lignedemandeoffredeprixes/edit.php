<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lignedemandeoffredeprix $lignedemandeoffredeprix
 * @var string[]|\Cake\Collection\CollectionInterface $demandeoffredeprixes
 * @var string[]|\Cake\Collection\CollectionInterface $articles
 * @var string[]|\Cake\Collection\CollectionInterface $fournisseurs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lignedemandeoffredeprix->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lignedemandeoffredeprix->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lignedemandeoffredeprixes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lignedemandeoffredeprixes form content">
            <?= $this->Form->create($lignedemandeoffredeprix) ?>
            <fieldset>
                <legend><?= __('Edit Lignedemandeoffredeprix') ?></legend>
                <?php
                    echo $this->Form->control('demandeoffredeprix_id', ['options' => $demandeoffredeprixes, 'empty' => true]);
                    echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
                    echo $this->Form->control('designiationA');
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs, 'empty' => true]);
                    echo $this->Form->control('nameF');
                    echo $this->Form->control('qte');
                    echo $this->Form->control('mail');
                    echo $this->Form->control('envoiemail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
