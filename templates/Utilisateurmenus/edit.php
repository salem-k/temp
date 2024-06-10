<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilisateurmenu $utilisateurmenu
 * @var string[]|\Cake\Collection\CollectionInterface $utilisateurs
 * @var string[]|\Cake\Collection\CollectionInterface $menus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $utilisateurmenu->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateurmenu->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Utilisateurmenus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="utilisateurmenus form content">
            <?= $this->Form->create($utilisateurmenu) ?>
            <fieldset>
                <legend><?= __('Edit Utilisateurmenu') ?></legend>
                <?php
                    echo $this->Form->control('utilisateur_id', ['options' => $utilisateurs, 'empty' => true]);
                    echo $this->Form->control('menu_id', ['options' => $menus]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
