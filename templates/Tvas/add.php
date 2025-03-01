<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tva $tva
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tvas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tvas form content">
            <?= $this->Form->create($tva) ?>
            <fieldset>
                <legend><?= __('Add Tva') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('valeur');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
