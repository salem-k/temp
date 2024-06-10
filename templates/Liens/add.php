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
            <?= $this->Html->link(__('List Liens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="liens form content">
            <?= $this->Form->create($lien) ?>
            <fieldset>
                <legend><?= __('Add Lien') ?></legend>
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
