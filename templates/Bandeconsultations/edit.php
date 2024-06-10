<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bandeconsultation $bandeconsultation
 * @var string[]|\Cake\Collection\CollectionInterface $demandeoffredeprixes
 * @var string[]|\Cake\Collection\CollectionInterface $fournisseurs
 * @var string[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bandeconsultation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bandeconsultation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bandeconsultations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bandeconsultations form content">
            <?= $this->Form->create($bandeconsultation) ?>
            <fieldset>
                <legend><?= __('Edit Bandeconsultation') ?></legend>
                <?php
                    echo $this->Form->control('demandeoffredeprix_id', ['options' => $demandeoffredeprixes, 'empty' => true]);
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs, 'empty' => true]);
                    echo $this->Form->control('nameF');
                    echo $this->Form->control('codefrs');
                    echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
                    echo $this->Form->control('designiationA');
                    echo $this->Form->control('qte');
                    echo $this->Form->control('prix');
                    echo $this->Form->control('totalprix');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
