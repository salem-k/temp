<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Repsectoriel $repsectoriel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Repsectoriels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="repsectoriels form content">
            <?= $this->Form->create($repsectoriel) ?>
            <fieldset>
                <legend><?= __('Add Repsectoriel') ?></legend>
                <?php
                    echo $this->Form->control('Responsable');
                    echo $this->Form->control('Numero_telephone');
                    echo $this->Form->control('Username');
                    echo $this->Form->control('Password');
                    echo $this->Form->control('Email');
                    echo $this->Form->control('Voiture');
                    echo $this->Form->control('Categorie');
                    echo $this->Form->control('Remplacant_id');
                    echo $this->Form->control('Activity');
                    echo $this->Form->control('depotttt_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
