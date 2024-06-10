<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 *
 * @property \App\Model\Table\SouscategoriesTable&\Cake\ORM\Association\BelongsTo $Souscategories
 *
 * @method \App\Model\Entity\Article newEmptyEntity()
 * @method \App\Model\Entity\Article newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Article[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Article get($primaryKey, $options = [])
 * @method \App\Model\Entity\Article findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Article patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Article[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Article|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Article saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ArticlesTable extends Table
{
  /**
   * Initialize method
   *
   * @param array $config The configuration for the Table.
   * @return void
   */
  public function initialize(array $config): void
  {
    parent::initialize($config);

    $this->setTable('articles');
    $this->setDisplayField('id');
    $this->setPrimaryKey('id');

    $this->belongsTo('Souscategories', [
      'foreignKey' => 'souscategorie_id',
    ]);
  }

  /**
   * Default validation rules.
   *
   * @param \Cake\Validation\Validator $validator Validator instance.
   * @return \Cake\Validation\Validator
   */
  public function validationDefault(Validator $validator): Validator
  {
//        $validator
//            ->numeric('Code_Socit')
//            ->allowEmptyString('Code_Socit');
//
//        $validator
//            ->scalar('Code')
//            ->maxLength('Code', 100)
//            ->allowEmptyString('Code');
//
//        $validator
//            ->scalar('Dsignation')
//            ->maxLength('Dsignation', 100)
//            ->allowEmptyString('Dsignation');
//
//        $validator
//            ->scalar('Description')
//            ->maxLength('Description', 100)
//            ->allowEmptyString('Description');
//
//        $validator
//            ->numeric('famille_id')
//            ->allowEmptyString('famille_id');
//
//        $validator
//            ->integer('sousfamille1_id')
//            ->allowEmptyString('sousfamille1_id');
//
//        $validator
//            ->numeric('tva_id')
//            ->allowEmptyString('tva_id');
//
//        $validator
//            ->numeric('Quantit_Minimale')
//            ->allowEmptyString('Quantit_Minimale');
//
//        $validator
//            ->numeric('Quantit_Maximale')
//            ->allowEmptyString('Quantit_Maximale');
//
//        $validator
//            ->numeric('Quantit_Opt_Commande')
//            ->allowEmptyString('Quantit_Opt_Commande');
//
//        $validator
//            ->numeric('Prix_Moyen_Pondr')
//            ->allowEmptyString('Prix_Moyen_Pondr');
//
//        $validator
//            ->numeric('Quantit_Command')
//            ->allowEmptyString('Quantit_Command');
//
//        $validator
//            ->numeric('Quantit_Reserv')
//            ->allowEmptyString('Quantit_Reserv');
//
//        $validator
//            ->numeric('Quantit_Disponible')
//            ->allowEmptyString('Quantit_Disponible');
//
//        $validator
//            ->numeric('Quantit_Inventaire')
//            ->allowEmptyString('Quantit_Inventaire');
//
//        $validator
//            ->scalar('Date_Inventaire')
//            ->maxLength('Date_Inventaire', 100)
//            ->allowEmptyString('Date_Inventaire');
//
//        $validator
//            ->numeric('Quantit_LastInput')
//            ->allowEmptyString('Quantit_LastInput');
//
//        $validator
//            ->numeric('Prix_LastInput')
//            ->allowEmptyString('Prix_LastInput');
//
//        $validator
//            ->scalar('Date_LastInput')
//            ->maxLength('Date_LastInput', 100)
//            ->allowEmptyString('Date_LastInput');
//
//        $validator
//            ->numeric('Stockage')
//            ->allowEmptyString('Stockage');
//
//        $validator
//            ->scalar('artM')
//            ->maxLength('artM', 100)
//            ->allowEmptyString('artM');
//
//        $validator
//            ->numeric('PrixGamme')
//            ->allowEmptyString('PrixGamme');
//
//        $validator
//            ->scalar('AtGamme')
//            ->maxLength('AtGamme', 100)
//            ->allowEmptyString('AtGamme');
//
//        $validator
//            ->numeric('PrixNom')
//            ->allowEmptyString('PrixNom');
//
//        $validator
//            ->numeric('QTR')
//            ->allowEmptyString('QTR');
//
//        $validator
//            ->numeric('QTRSRT')
//            ->allowEmptyString('QTRSRT');
//
//        $validator
//            ->numeric('PXNOM2008')
//            ->allowEmptyString('PXNOM2008');
//
//        $validator
//            ->numeric('PXGAMME2008')
//            ->allowEmptyString('PXGAMME2008');
//
//        $validator
//            ->numeric('Unite')
//            ->allowEmptyString('Unite');
//
//        $validator
//            ->numeric('PHT')
//            ->allowEmptyString('PHT');
//
//        $validator
//            ->numeric('Poids')
//            ->allowEmptyString('Poids');
//
//        $validator
//            ->numeric('GRM')
//            ->allowEmptyString('GRM');
//
//        $validator
//            ->scalar('TPP')
//            ->maxLength('TPP', 100)
//            ->allowEmptyString('TPP');
//
//        $validator
//            ->scalar('FRM')
//            ->maxLength('FRM', 100)
//            ->allowEmptyString('FRM');
//
//        $validator
//            ->scalar('CodeM')
//            ->maxLength('CodeM', 100)
//            ->allowEmptyString('CodeM');
//
//        $validator
//            ->scalar('ST')
//            ->maxLength('ST', 100)
//            ->allowEmptyString('ST');
//
//        $validator
//            ->numeric('QTMAG')
//            ->allowEmptyString('QTMAG');
//
//        $validator
//            ->numeric('PTTC')
//            ->allowEmptyString('PTTC');
//
//        $validator
//            ->scalar('Quantit_Disponible02')
//            ->maxLength('Quantit_Disponible02', 100)
//            ->allowEmptyString('Quantit_Disponible02');
//
//        $validator
//            ->scalar('Quantit_Disponible03')
//            ->maxLength('Quantit_Disponible03', 100)
//            ->allowEmptyString('Quantit_Disponible03');
//
//        $validator
//            ->numeric('CodeEcolef')
//            ->allowEmptyString('CodeEcolef');
//
//        $validator
//            ->numeric('PRIXEcolef')
//            ->allowEmptyString('PRIXEcolef');
//
//        $validator
//            ->numeric('POIDSECOLEF')
//            ->allowEmptyString('POIDSECOLEF');
//
//        $validator
//            ->numeric('CodeTPE')
//            ->allowEmptyString('CodeTPE');
//
//        $validator
//            ->scalar('UserAdd')
//            ->maxLength('UserAdd', 100)
//            ->allowEmptyString('UserAdd');
//
//        $validator
//            ->scalar('DateAdd')
//            ->maxLength('DateAdd', 100)
//            ->allowEmptyString('DateAdd');
//
//        $validator
//            ->scalar('UserUpdate')
//            ->maxLength('UserUpdate', 100)
//            ->allowEmptyString('UserUpdate');
//
//        $validator
//            ->scalar('DateUpdate')
//            ->maxLength('DateUpdate', 100)
//            ->allowEmptyString('DateUpdate');
//
//        $validator
//            ->scalar('PrixMP')
//            ->maxLength('PrixMP', 100)
//            ->allowEmptyString('PrixMP');
//
//        $validator
//            ->scalar('PrixV')
//            ->maxLength('PrixV', 100)
//            ->allowEmptyString('PrixV');
//
//        $validator
//            ->scalar('PrixVM')
//            ->maxLength('PrixVM', 100)
//            ->allowEmptyString('PrixVM');
//
//        $validator
//            ->scalar('PrixEN')
//            ->maxLength('PrixEN', 100)
//            ->allowEmptyString('PrixEN');
//
//        $validator
//            ->scalar('TauxCharge')
//            ->maxLength('TauxCharge', 100)
//            ->allowEmptyString('TauxCharge');
//
//        $validator
//            ->numeric('CoutRevient')
//            ->allowEmptyString('CoutRevient');
//
//        $validator
//            ->scalar('image')
//            ->maxLength('image', 16777215)
//            ->allowEmptyFile('image');
//
//        $validator
//            ->integer('etat')
//            ->allowEmptyString('etat');
//
//        $validator
//            ->integer('inserted')
//            ->allowEmptyString('inserted');
//
//        $validator
//            ->integer('ordre')
//            ->allowEmptyString('ordre');
//
//        $validator
//            ->integer('typearticle_id')
//            ->allowEmptyString('typearticle_id');
//
//        $validator
//            ->integer('fodec')
//            ->allowEmptyString('fodec');
//
//        $validator
//            ->decimal('remise')
//            ->allowEmptyString('remise');
//
//        $validator
//            ->integer('nombrepiece')
//            ->allowEmptyString('nombrepiece');
//
//        $validator
//            ->scalar('codeabarre')
//            ->maxLength('codeabarre', 12)
//            ->allowEmptyString('codeabarre');
//
//        $validator
//            ->numeric('poidsbrut')
//            ->allowEmptyString('poidsbrut');
//
//        $validator
//            ->numeric('prixttc')
//            ->allowEmptyString('prixttc');
//
//        $validator
//            ->integer('unitearticle_id')
//            ->allowEmptyString('unitearticle_id');
//
//        $validator
//            ->numeric('nbpiecepalette')
//            ->allowEmptyString('nbpiecepalette');
//
//        $validator
//            ->numeric('contenance')
//            ->allowEmptyString('contenance');
//
//        $validator
//            ->integer('unite_id')
//            ->allowEmptyString('unite_id');
//
//        $validator
//            ->integer('sousfamille2_id')
//            ->allowEmptyString('sousfamille2_id');
//
//        $validator
//            ->numeric('nbpoint')
//            ->allowEmptyString('nbpoint');
//
//        $validator
//            ->numeric('coefficient')
//            ->allowEmptyString('coefficient');
//
//        $validator
//            ->integer('nbjour')
//            ->allowEmptyString('nbjour');
//
//        $validator
//            ->integer('famillerotation_id')
//            ->allowEmptyString('famillerotation_id');
//
//        $validator
//            ->integer('vente')
//            ->allowEmptyString('vente');
//
//        $validator
//            ->integer('devise_id')
//            ->allowEmptyString('devise_id');
//
//        $validator
//            ->scalar('densite')
//            ->maxLength('densite', 255)
//            ->allowEmptyString('densite');
//
//        $validator
//            ->integer('mobile')
//            ->allowEmptyString('mobile');
//
//        $validator
//            ->scalar('Reffourni')
//            ->maxLength('Reffourni', 255)
//            ->allowEmptyString('Reffourni');
//
//        $validator
//            ->scalar('Refggb')
//            ->maxLength('Refggb', 255)
//            ->allowEmptyString('Refggb');
//
//        $validator
//            ->integer('lots')
//            ->allowEmptyString('lots');
//
//        $validator
//            ->scalar('URL')
//            ->maxLength('URL', 255)
//            ->allowEmptyString('URL');
//
//        $validator
//            ->integer('pay_id')
//            ->allowEmptyString('pay_id');
//
//        $validator
//            ->scalar('longueur')
//            ->maxLength('longueur', 50)
//            ->allowEmptyString('longueur');
//
//        $validator
//            ->scalar('largeur')
//            ->maxLength('largeur', 50)
//            ->allowEmptyString('largeur');
//
//        $validator
//            ->scalar('hauteur')
//            ->maxLength('hauteur', 50)
//            ->allowEmptyString('hauteur');
//
//        $validator
//            ->scalar('surface')
//            ->maxLength('surface', 50)
//            ->allowEmptyString('surface');
//
//        $validator
//            ->scalar('volume')
//            ->maxLength('volume', 50)
//            ->allowEmptyString('volume');
//
//        $validator
//            ->scalar('note')
//            ->maxLength('note', 255)
//            ->allowEmptyString('note');
//
//        $validator
//            ->integer('categorie_id')
//            ->allowEmptyString('categorie_id');
//
//        $validator
//            ->integer('souscategorie_id')
//            ->allowEmptyString('souscategorie_id');

    return $validator;
  }

  /**
   * Returns a rules checker object that will be used for validating
   * application integrity.
   *
   * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
   * @return \Cake\ORM\RulesChecker
   */
  public function buildRules(RulesChecker $rules): RulesChecker
  {
    $rules->add($rules->existsIn('souscategorie_id', 'Souscategories'), ['errorField' => 'souscategorie_id']);

    return $rules;
  }
}
