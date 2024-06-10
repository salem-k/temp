<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscategory $souscategory
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $souscategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $souscategory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Souscategories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="souscategories form content">
            <?= $this->Form->create($souscategory) ?>
            <fieldset>
                <legend><?= __('Edit Souscategory') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('categorie_id', ['options' => $categories, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
