<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bonreceptionstock $bonreceptionstock
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 * @var \Cake\Collection\CollectionInterface|string[] $personnels
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bonreceptionstocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bonreceptionstocks form content">
            <?= $this->Form->create($bonreceptionstock) ?>
            <fieldset>
                <legend><?= __('Add Bonreceptionstock') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('date');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes]);
                    echo $this->Form->control('depot_id', ['options' => $depots]);
                    echo $this->Form->control('materieltransport_id');
                    echo $this->Form->control('cartecarburant_id');
                    echo $this->Form->control('personnel_id', ['options' => $personnels]);
                    echo $this->Form->control('conffaieur_id');
                    echo $this->Form->control('chauffeur_id');
                    echo $this->Form->control('kilometragedepart');
                    echo $this->Form->control('kilometragearrive');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
