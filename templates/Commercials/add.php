<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commercial $commercial
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Commercials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commercials form content">
            <?= $this->Form->create($commercial) ?>
            <fieldset>
                <legend><?= __('Add Commercial') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('login');
                    echo $this->Form->control('mp');
                    echo $this->Form->control('categorie_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('soldedepart');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
