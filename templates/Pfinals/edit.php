<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pfinal $pfinal
 * @var string[]|\Cake\Collection\CollectionInterface $souscategories
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pfinal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pfinal->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pfinals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pfinals form content">
            <?= $this->Form->create($pfinal) ?>
            <fieldset>
                <legend><?= __('Edit Pfinal') ?></legend>
                <?php
                    echo $this->Form->control('Description');
                    echo $this->Form->control('Prix');
                    echo $this->Form->control('PrixSEC');
                    echo $this->Form->control('PrixGROS');
                    echo $this->Form->control('PHOTO');
                    echo $this->Form->control('Gratuit');
                    echo $this->Form->control('souscategorie_id', ['options' => $souscategories]);
                    echo $this->Form->control('categories_id', ['options' => $categories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
