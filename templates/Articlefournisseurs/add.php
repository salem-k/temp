<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articlefournisseur $articlefournisseur
 * @var \Cake\Collection\CollectionInterface|string[] $fournisseurs
 * @var \Cake\Collection\CollectionInterface|string[] $articles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Articlefournisseurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articlefournisseurs form content">
            <?= $this->Form->create($articlefournisseur) ?>
            <fieldset>
                <legend><?= __('Add Articlefournisseur') ?></legend>
                <?php
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs, 'empty' => true]);
                    echo $this->Form->control('code');
                    echo $this->Form->control('prix');
                    echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
