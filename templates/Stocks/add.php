<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock $stock
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 * @var \Cake\Collection\CollectionInterface|string[] $pfinals
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Stocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stocks form content">
            <?= $this->Form->create($stock) ?>
            <fieldset>
                <legend><?= __('Add Stock') ?></legend>
                <?php
                    echo $this->Form->control('depot_id', ['options' => $depots]);
                    echo $this->Form->control('pfinals_id', ['options' => $pfinals]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
