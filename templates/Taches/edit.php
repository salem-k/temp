<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tach $tach
 * @var string[]|\Cake\Collection\CollectionInterface $personnels
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tach->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tach->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Taches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="taches form content">
            <?= $this->Form->create($tach) ?>
            <fieldset>
                <legend><?= __('Edit Tach') ?></legend>
                <?php
                    echo $this->Form->control('ref');
                    echo $this->Form->control('libelle');
                    echo $this->Form->control('projet_id');
                    echo $this->Form->control('dated', ['empty' => true]);
                    echo $this->Form->control('datefin', ['empty' => true]);
                    echo $this->Form->control('duree');
                    echo $this->Form->control('progression_id');
                    echo $this->Form->control('description');
                    echo $this->Form->control('contact');
                    echo $this->Form->control('dureem');
                    echo $this->Form->control('personnel_id', ['options' => $personnels, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
