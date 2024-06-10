<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Magasin $magasin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $magasin->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $magasin->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Magasins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="magasins form content">
            <?= $this->Form->create($magasin) ?>
            <fieldset>
                <legend><?= __('Edit Magasin') ?></legend>
                <?php
                    echo $this->Form->control('Description');
                    echo $this->Form->control('Adresse');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
