<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bondetransfert $bondetransfert
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 * @var string[]|\Cake\Collection\CollectionInterface $bonreceptionstocks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bondetransfert->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bondetransfert->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bondetransferts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bondetransferts form content">
            <?= $this->Form->create($bondetransfert) ?>
            <fieldset>
                <legend><?= __('Edit Bondetransfert') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('date');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes]);
                    echo $this->Form->control('depot_id', ['options' => $depots]);
                    echo $this->Form->control('depot_to_id');
                    echo $this->Form->control('bonreceptionstock_id', ['options' => $bonreceptionstocks, 'empty' => true]);
                    echo $this->Form->control('kilometragedepart');
                    echo $this->Form->control('kilometragearrive');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
