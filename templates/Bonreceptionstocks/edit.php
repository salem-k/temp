<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bonreceptionstock $bonreceptionstock
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 * @var string[]|\Cake\Collection\CollectionInterface $personnels
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bonreceptionstock->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bonreceptionstock->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bonreceptionstocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bonreceptionstocks form content">
            <?= $this->Form->create($bonreceptionstock) ?>
            <fieldset>
                <legend><?= __('Edit Bonreceptionstock') ?></legend>
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
