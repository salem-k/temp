<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Incoterm $incoterm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Incoterms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="incoterms form content">
            <?= $this->Form->create($incoterm) ?>
            <fieldset>
                <legend><?= __('Add Incoterm') ?></legend>
                <?php
                    echo $this->Form->control('code');
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
