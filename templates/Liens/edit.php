<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lien $lien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lien->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lien->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Liens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="liens form content">
            <?= $this->Form->create($lien) ?>
            <fieldset>
                <legend><?= __('Edit Lien') ?></legend>
                <?php
                    echo $this->Form->control('utilisateurmenu_id');
                    echo $this->Form->control('lien');
                    echo $this->Form->control('ajout');
                    echo $this->Form->control('modif');
                    echo $this->Form->control('supp');
                    echo $this->Form->control('imprimer');
                    echo $this->Form->control('valide');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
