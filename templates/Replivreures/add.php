<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Replivreure $replivreure
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Replivreures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="replivreures form content">
            <?= $this->Form->create($replivreure) ?>
            <fieldset>
                <legend><?= __('Add Replivreure') ?></legend>
                <?php
                    echo $this->Form->control('Responsable');
                    echo $this->Form->control('Adresse');
                    echo $this->Form->control('Username');
                    echo $this->Form->control('Password');
                    echo $this->Form->control('Email');
                    echo $this->Form->control('Voiture');
                    echo $this->Form->control('Categorie');
                    echo $this->Form->control('Telephone');
                    echo $this->Form->control('Depot_id', ['options' => $depots]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
