<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dstock $dstock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Dstocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dstocks form content">
            <?= $this->Form->create($dstock) ?>
            <fieldset>
                <legend><?= __('Add Dstock') ?></legend>
                <?php
                    echo $this->Form->control('dstock_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
