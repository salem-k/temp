<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pointdevente $pointdevente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pointdevente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pointdevente->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pointdeventes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pointdeventes form content">
            <?= $this->Form->create($pointdevente) ?>
            <fieldset>
                <legend><?= __('Edit Pointdevente') ?></legend>
                <?php
                    echo $this->Form->control('code');
                    echo $this->Form->control('name');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('ville_id');
                    echo $this->Form->control('matriclefiscale');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
