<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accueil $accueil
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accueil->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accueil->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Accueils'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accueils form content">
            <?= $this->Form->create($accueil) ?>
            <fieldset>
                <legend><?= __('Edit Accueil') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('logo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
