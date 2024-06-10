<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fournisseurs Model
 *
 * @property \App\Model\Table\VillesTable&\Cake\ORM\Association\BelongsTo $Villes
 * @property \App\Model\Table\PaysTable&\Cake\ORM\Association\BelongsTo $Pays
 * @property \App\Model\Table\PaiementsTable&\Cake\ORM\Association\BelongsTo $Paiements
 * @property \App\Model\Table\DelegationsTable&\Cake\ORM\Association\BelongsTo $Delegations
 * @property \App\Model\Table\LocalitesTable&\Cake\ORM\Association\BelongsTo $Localites
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\HasMany $Factures
 * @property \App\Model\Table\LivraisonsTable&\Cake\ORM\Association\HasMany $Livraisons
 *
 * @method \App\Model\Entity\Fournisseur newEmptyEntity()
 * @method \App\Model\Entity\Fournisseur newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Fournisseur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fournisseur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fournisseur findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Fournisseur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fournisseur[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fournisseur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fournisseur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fournisseur[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fournisseur[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fournisseur[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fournisseur[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FournisseursTable extends Table
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

        $this->setTable('fournisseurs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Villes', [
            'foreignKey' => 'ville_id',
        ]);
        $this->belongsTo('Pays', [
            'foreignKey' => 'pay_id',
        ]);
        $this->belongsTo('Paiements', [
            'foreignKey' => 'paiement_id',
        ]);
        $this->belongsTo('Delegations', [
            'foreignKey' => 'delegation_id',
        ]);
        $this->belongsTo('Localites', [
            'foreignKey' => 'localite_id',
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'categorie_id',
        ]);
        $this->hasMany('Factures', [
            'foreignKey' => 'fournisseur_id',
        ]);
        $this->hasMany('Livraisons', [
            'foreignKey' => 'fournisseur_id',
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
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('typefournisseur_id')
            ->allowEmptyString('typefournisseur_id');

        $validator
            ->integer('typelocalisation_id')
            ->allowEmptyString('typelocalisation_id');

        $validator
            ->scalar('compte_comptable')
            ->maxLength('compte_comptable', 255)
            ->allowEmptyString('compte_comptable');

        $validator
            ->integer('ville_id')
            ->allowEmptyString('ville_id');

        $validator
            ->scalar('codepostal')
            ->maxLength('codepostal', 255)
            ->allowEmptyString('codepostal');

        $validator
            ->integer('region_id')
            ->allowEmptyString('region_id');

        $validator
            ->integer('pay_id')
            ->allowEmptyString('pay_id');

        $validator
            ->scalar('activite')
            ->maxLength('activite', 255)
            ->allowEmptyString('activite');

        $validator
            ->scalar('secteur')
            ->maxLength('secteur', 255)
            ->allowEmptyString('secteur');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 255)
            ->allowEmptyString('tel');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 255)
            ->allowEmptyString('fax');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 255)
            ->allowEmptyString('mail');

        $validator
            ->scalar('site')
            ->maxLength('site', 255)
            ->allowEmptyString('site');

        $validator
            ->integer('paiement_id')
            ->allowEmptyString('paiement_id');

        $validator
            ->integer('devise_id')
            ->allowEmptyString('devise_id');

        $validator
            ->integer('typeutilisateur_id')
            ->allowEmptyString('typeutilisateur_id');

        $validator
            ->integer('exo')
            ->allowEmptyString('exo');

        $validator
            ->scalar('code')
            ->maxLength('code', 255)
            ->allowEmptyString('code');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 255)
            ->allowEmptyString('adresse');

        $validator
            ->integer('gouvernorat_id')
            ->allowEmptyString('gouvernorat_id');

        $validator
            ->integer('delegation_id')
            ->allowEmptyString('delegation_id');

        $validator
            ->integer('localite_id')
            ->allowEmptyString('localite_id');

        $validator
            ->integer('typetier_id')
            ->allowEmptyString('typetier_id');

        $validator
            ->integer('typeentite_id')
            ->allowEmptyString('typeentite_id');

        $validator
            ->scalar('villes')
            ->maxLength('villes', 255)
            ->allowEmptyString('villes');

        $validator
            ->integer('prospect_id')
            ->allowEmptyString('prospect_id');

        $validator
            ->scalar('codecl')
            ->maxLength('codecl', 50)
            ->allowEmptyString('codecl');

        $validator
            ->scalar('fournisseur')
            ->maxLength('fournisseur', 50)
            ->allowEmptyString('fournisseur');

        $validator
            ->scalar('nomalternatif')
            ->maxLength('nomalternatif', 255)
            ->allowEmptyString('nomalternatif');

        $validator
            ->scalar('RC')
            ->maxLength('RC', 255)
            ->allowEmptyString('RC');

        $validator
            ->scalar('codedouane')
            ->maxLength('codedouane', 255)
            ->allowEmptyString('codedouane');

        $validator
            ->scalar('matricule_fiscale')
            ->maxLength('matricule_fiscale', 255)
            ->allowEmptyString('matricule_fiscale');

        $validator
            ->scalar('BAN')
            ->maxLength('BAN', 255)
            ->allowEmptyString('BAN');

        $validator
            ->scalar('ajusterTVA')
            ->maxLength('ajusterTVA', 50)
            ->allowEmptyString('ajusterTVA');

        $validator
            ->scalar('numTVA')
            ->maxLength('numTVA', 50)
            ->allowEmptyString('numTVA');

        $validator
            ->integer('salari_id')
            ->allowEmptyString('salari_id');

        $validator
            ->scalar('capital')
            ->maxLength('capital', 255)
            ->allowEmptyString('capital');

        $validator
            ->integer('incoterm_id')
            ->allowEmptyString('incoterm_id');

        $validator
            ->scalar('port')
            ->maxLength('port', 255)
            ->allowEmptyString('port');

        $validator
            ->scalar('tags')
            ->maxLength('tags', 50)
            ->allowEmptyString('tags');

        $validator
            ->scalar('commercial')
            ->maxLength('commercial', 50)
            ->allowEmptyString('commercial');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 255)
            ->allowEmptyString('logo');

        $validator
            ->dateTime('datemodification')
            ->allowEmptyDateTime('datemodification');

        $validator
            ->integer('categorie_id')
            ->allowEmptyString('categorie_id');

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
        $rules->add($rules->existsIn('ville_id', 'Villes'), ['errorField' => 'ville_id']);
        $rules->add($rules->existsIn('pay_id', 'Pays'), ['errorField' => 'pay_id']);
        $rules->add($rules->existsIn('paiement_id', 'Paiements'), ['errorField' => 'paiement_id']);
        $rules->add($rules->existsIn('delegation_id', 'Delegations'), ['errorField' => 'delegation_id']);
        $rules->add($rules->existsIn('localite_id', 'Localites'), ['errorField' => 'localite_id']);
        $rules->add($rules->existsIn('categorie_id', 'Categories'), ['errorField' => 'categorie_id']);

        return $rules;
    }
}
