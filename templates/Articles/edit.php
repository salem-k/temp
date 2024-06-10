<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 * @var string[]|\Cake\Collection\CollectionInterface $tvas
 * @var string[]|\Cake\Collection\CollectionInterface $typearticles
 * @var string[]|\Cake\Collection\CollectionInterface $unites
 * @var string[]|\Cake\Collection\CollectionInterface $devises
 * @var string[]|\Cake\Collection\CollectionInterface $pays
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 * @var string[]|\Cake\Collection\CollectionInterface $souscategories
 * @var string[]|\Cake\Collection\CollectionInterface $fournisseurs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles form content">
            <?= $this->Form->create($article) ?>
            <fieldset>
                <legend><?= __('Edit Article') ?></legend>
                <?php
                    echo $this->Form->control('Code_Socit');
                    echo $this->Form->control('Code');
                    echo $this->Form->control('Dsignation');
                    echo $this->Form->control('Description');
                    echo $this->Form->control('famille_id');
                    echo $this->Form->control('sousfamille1_id');
                    echo $this->Form->control('tva_id', ['options' => $tvas, 'empty' => true]);
                    echo $this->Form->control('Quantit_Minimale');
                    echo $this->Form->control('Quantit_Maximale');
                    echo $this->Form->control('Quantit_Opt_Commande');
                    echo $this->Form->control('Prix_Moyen_Pondr');
                    echo $this->Form->control('Quantit_Command');
                    echo $this->Form->control('Quantit_Reserv');
                    echo $this->Form->control('Quantit_Disponible');
                    echo $this->Form->control('Quantit_Inventaire');
                    echo $this->Form->control('Date_Inventaire');
                    echo $this->Form->control('Quantit_LastInput');
                    echo $this->Form->control('Prix_LastInput');
                    echo $this->Form->control('Date_LastInput');
                    echo $this->Form->control('Stockage');
                    echo $this->Form->control('artM');
                    echo $this->Form->control('PrixGamme');
                    echo $this->Form->control('AtGamme');
                    echo $this->Form->control('PrixNom');
                    echo $this->Form->control('QTR');
                    echo $this->Form->control('QTRSRT');
                    echo $this->Form->control('PXNOM2008');
                    echo $this->Form->control('PXGAMME2008');
                    echo $this->Form->control('Unite');
                    echo $this->Form->control('PHT');
                    echo $this->Form->control('Poids');
                    echo $this->Form->control('GRM');
                    echo $this->Form->control('TPP');
                    echo $this->Form->control('FRM');
                    echo $this->Form->control('CodeM');
                    echo $this->Form->control('ST');
                    echo $this->Form->control('QTMAG');
                    echo $this->Form->control('PTTC');
                    echo $this->Form->control('Quantit_Disponible02');
                    echo $this->Form->control('Quantit_Disponible03');
                    echo $this->Form->control('CodeEcolef');
                    echo $this->Form->control('PRIXEcolef');
                    echo $this->Form->control('POIDSECOLEF');
                    echo $this->Form->control('CodeTPE');
                    echo $this->Form->control('UserAdd');
                    echo $this->Form->control('DateAdd');
                    echo $this->Form->control('UserUpdate');
                    echo $this->Form->control('DateUpdate');
                    echo $this->Form->control('PrixMP');
                    echo $this->Form->control('PrixV');
                    echo $this->Form->control('PrixVM');
                    echo $this->Form->control('PrixEN');
                    echo $this->Form->control('TauxCharge');
                    echo $this->Form->control('CoutRevient');
                    echo $this->Form->control('image');
                    echo $this->Form->control('etat');
                    echo $this->Form->control('inserted');
                    echo $this->Form->control('ordre');
                    echo $this->Form->control('typearticle_id', ['options' => $typearticles, 'empty' => true]);
                    echo $this->Form->control('fodec');
                    echo $this->Form->control('remise');
                    echo $this->Form->control('nombrepiece');
                    echo $this->Form->control('codeabarre');
                    echo $this->Form->control('poidsbrut');
                    echo $this->Form->control('prixttc');
                    echo $this->Form->control('unitearticle_id');
                    echo $this->Form->control('nbpiecepalette');
                    echo $this->Form->control('contenance');
                    echo $this->Form->control('unite_id', ['options' => $unites, 'empty' => true]);
                    echo $this->Form->control('sousfamille2_id');
                    echo $this->Form->control('nbpoint');
                    echo $this->Form->control('coefficient');
                    echo $this->Form->control('nbjour');
                    echo $this->Form->control('famillerotation_id');
                    echo $this->Form->control('vente');
                    echo $this->Form->control('devise_id', ['options' => $devises, 'empty' => true]);
                    echo $this->Form->control('densite');
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('Reffourni');
                    echo $this->Form->control('Refggb');
                    echo $this->Form->control('lots');
                    echo $this->Form->control('URL');
                    echo $this->Form->control('pay_id', ['options' => $pays, 'empty' => true]);
                    echo $this->Form->control('longueur');
                    echo $this->Form->control('largeur');
                    echo $this->Form->control('hauteur');
                    echo $this->Form->control('surface');
                    echo $this->Form->control('volume');
                    echo $this->Form->control('note');
                    echo $this->Form->control('categorie_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('souscategorie_id', ['options' => $souscategories, 'empty' => true]);
                    echo $this->Form->control('codecomptablevente_id');
                    echo $this->Form->control('codecomptableexport_id');
                    echo $this->Form->control('codecomptableachat_id');
                    echo $this->Form->control('datearticle', ['empty' => true]);
                    echo $this->Form->control('ancienprix');
                    echo $this->Form->control('meilleur_prix_achat');
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs, 'empty' => true]);
                    echo $this->Form->control('typearticle');
                    echo $this->Form->control('dure');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
