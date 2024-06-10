<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Destruction $destruction
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Destructions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="destructions form content">
            <?= $this->Form->create($destruction) ?>
            <fieldset>
                <legend><?= __('Add Destruction') ?></legend>
                <?php
                    echo $this->Form->control('Date');
                    echo $this->Form->control('Depot_id', ['options' => $depots]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
