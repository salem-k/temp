<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventaire $inventaire
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Inventaires'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inventaires form content">
            <?= $this->Form->create($inventaire) ?>
            <fieldset>
                <legend><?= __('Add Inventaire') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('valide');
                    echo $this->Form->control('typeinventaire');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
