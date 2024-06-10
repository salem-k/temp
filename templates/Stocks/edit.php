<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock $stock
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 * @var string[]|\Cake\Collection\CollectionInterface $pfinals
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stock->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Stocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stocks form content">
            <?= $this->Form->create($stock) ?>
            <fieldset>
                <legend><?= __('Edit Stock') ?></legend>
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
