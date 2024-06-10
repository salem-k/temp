<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lignefactureclient $lignefactureclient
 * @var \Cake\Collection\CollectionInterface|string[] $factureclients
 * @var \Cake\Collection\CollectionInterface|string[] $articles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Lignefactureclients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lignefactureclients form content">
            <?= $this->Form->create($lignefactureclient) ?>
            <fieldset>
                <legend><?= __('Add Lignefactureclient') ?></legend>
                <?php
                    echo $this->Form->control('factureclient_id', ['options' => $factureclients]);
                    echo $this->Form->control('article_id', ['options' => $articles]);
                    echo $this->Form->control('qte');
                    echo $this->Form->control('prixht');
                    echo $this->Form->control('remise');
                    echo $this->Form->control('punht');
                    echo $this->Form->control('tva');
                    echo $this->Form->control('fodec');
                    echo $this->Form->control('ttc');
                    echo $this->Form->control('qtestock');
                    echo $this->Form->control('totaltva');
                    echo $this->Form->control('totalttc');
                    echo $this->Form->control('montantht');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
