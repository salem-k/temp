<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeclient $typeclient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Typeclients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typeclients form content">
            <?= $this->Form->create($typeclient) ?>
            <fieldset>
                <legend><?= __('Add Typeclient') ?></legend>
                <?php
                    echo $this->Form->control('type');
                    echo $this->Form->control('grandsurface');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
