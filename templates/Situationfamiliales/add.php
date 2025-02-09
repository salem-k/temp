<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Situationfamiliale $situationfamiliale
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Situationfamiliales'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="situationfamiliales form content">
            <?= $this->Form->create($situationfamiliale) ?>
            <fieldset>
                <legend><?= __('Add Situationfamiliale') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
