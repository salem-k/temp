<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Repgro $repgro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Repgros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="repgros form content">
            <?= $this->Form->create($repgro) ?>
            <fieldset>
                <legend><?= __('Add Repgro') ?></legend>
                <?php
                    echo $this->Form->control('Responsable');
                    echo $this->Form->control('Responsable_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
