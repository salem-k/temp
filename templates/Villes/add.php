<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ville $ville
 * @var \Cake\Collection\CollectionInterface|string[] $pays
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Villes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="villes form content">
            <?= $this->Form->create($ville) ?>
            <fieldset>
                <legend><?= __('Add Ville') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('pay_id', ['options' => $pays]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
