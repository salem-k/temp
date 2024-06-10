<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personnels Model
 *
 * @property \App\Model\Table\FonctionsTable&\Cake\ORM\Association\BelongsTo $Fonctions
 * @property \App\Model\Table\SexesTable&\Cake\ORM\Association\BelongsTo $Sexes
 * @property \App\Model\Table\SituationfamilialesTable&\Cake\ORM\Association\BelongsTo $Situationfamiliales
 * @property \App\Model\Table\TypecontratsTable&\Cake\ORM\Association\BelongsTo $Typecontrats
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\PaysTable&\Cake\ORM\Association\BelongsTo $Pays
 * @property \App\Model\Table\BonreceptionstocksTable&\Cake\ORM\Association\HasMany $Bonreceptionstocks
 * @property \App\Model\Table\RepresentantsTable&\Cake\ORM\Association\HasMany $Representants
 * @property \App\Model\Table\TachesTable&\Cake\ORM\Association\HasMany $Taches
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\UtilisateursTable&\Cake\ORM\Association\HasMany $Utilisateurs
 *
 * @method \App\Model\Entity\Personnel newEmptyEntity()
 * @method \App\Model\Entity\Personnel newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Personnel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Personnel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Personnel findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Personnel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Personnel[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Personnel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Personnel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Personnel[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Personnel[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Personnel[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Personnel[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PersonnelsTable extends Table
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

        $this->setTable('personnels');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Fonctions', [
            'foreignKey' => 'fonction_id',
        ]);
        $this->belongsTo('Sexes', [
            'foreignKey' => 'sexe_id',
        ]);
        $this->belongsTo('Situationfamiliales', [
            'foreignKey' => 'situationfamiliale_id',
        ]);
        $this->belongsTo('Typecontrats', [
            'foreignKey' => 'typecontrat_id',
        ]);
        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->belongsTo('Pays', [
            'foreignKey' => 'pay_id',
        ]);
        $this->hasMany('Bonreceptionstocks', [
            'foreignKey' => 'personnel_id',
        ]);
        $this->hasMany('Representants', [
            'foreignKey' => 'personnel_id',
        ]);
        $this->hasMany('Taches', [
            'foreignKey' => 'personnel_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'personnel_id',
        ]);
        $this->hasMany('Utilisateurs', [
            'foreignKey' => 'personnel_id',
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
            ->scalar('nom')
            ->maxLength('nom', 255)
            ->allowEmptyString('nom');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 255)
            ->allowEmptyString('prenom');

        $validator
            ->integer('fonction_id')
            ->allowEmptyString('fonction_id');

        $validator
            ->scalar('code')
            ->maxLength('code', 255)
            ->allowEmptyString('code');

        $validator
            ->integer('sexe_id')
            ->allowEmptyString('sexe_id');

        $validator
            ->date('dateentre')
            ->allowEmptyDate('dateentre');

        $validator
            ->integer('situationfamiliale_id')
            ->allowEmptyString('situationfamiliale_id');

        $validator
            ->numeric('nombreenfant')
            ->allowEmptyString('nombreenfant');

        $validator
            ->scalar('matriculecnss')
            ->maxLength('matriculecnss', 255)
            ->allowEmptyString('matriculecnss');

        $validator
            ->numeric('age')
            ->allowEmptyString('age');

        $validator
            ->scalar('chefdefamille')
            ->maxLength('chefdefamille', 255)
            ->allowEmptyString('chefdefamille');

        $validator
            ->integer('typecontrat_id')
            ->allowEmptyString('typecontrat_id');

        $validator
            ->integer('pointdevente_id')
            ->allowEmptyString('pointdevente_id');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmptyFile('image');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 255)
            ->allowEmptyString('tel');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->integer('salarie')
            ->allowEmptyString('salarie');

        $validator
            ->integer('responsable')
            ->allowEmptyString('responsable');

        $validator
            ->integer('report_validator')
            ->allowEmptyString('report_validator');

        $validator
            ->integer('request_validator')
            ->allowEmptyString('request_validator');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 250)
            ->allowEmptyString('adresse');

        $validator
            ->integer('codepostal')
            ->allowEmptyString('codepostal');

        $validator
            ->scalar('ville')
            ->maxLength('ville', 250)
            ->allowEmptyString('ville');

        $validator
            ->integer('pay_id')
            ->allowEmptyString('pay_id');

        $validator
            ->integer('canton_id')
            ->allowEmptyString('canton_id');

        $validator
            ->scalar('telportable')
            ->maxLength('telportable', 250)
            ->allowEmptyString('telportable');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 250)
            ->allowEmptyString('fax');

        $validator
            ->scalar('compte_comptable')
            ->maxLength('compte_comptable', 250)
            ->allowEmptyString('compte_comptable');

        $validator
            ->integer('tarif_horaire_moyen')
            ->allowEmptyString('tarif_horaire_moyen');

        $validator
            ->integer('tarif_journalier_moyen')
            ->allowEmptyString('tarif_journalier_moyen');

        $validator
            ->integer('salaire')
            ->allowEmptyString('salaire');

        $validator
            ->integer('heures_de_travail')
            ->allowEmptyString('heures_de_travail');

        $validator
            ->date('date_fin')
            ->allowEmptyDate('date_fin');

        $validator
            ->date('datedenaissance')
            ->allowEmptyDate('datedenaissance');

        $validator
            ->scalar('notes')
            ->maxLength('notes', 250)
            ->allowEmptyString('notes');

        $validator
            ->scalar('signature')
            ->maxLength('signature', 250)
            ->allowEmptyString('signature');

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
        $rules->add($rules->existsIn('fonction_id', 'Fonctions'), ['errorField' => 'fonction_id']);
        $rules->add($rules->existsIn('sexe_id', 'Sexes'), ['errorField' => 'sexe_id']);
        $rules->add($rules->existsIn('situationfamiliale_id', 'Situationfamiliales'), ['errorField' => 'situationfamiliale_id']);
        $rules->add($rules->existsIn('typecontrat_id', 'Typecontrats'), ['errorField' => 'typecontrat_id']);
        $rules->add($rules->existsIn('pointdevente_id', 'Pointdeventes'), ['errorField' => 'pointdevente_id']);
        $rules->add($rules->existsIn('pay_id', 'Pays'), ['errorField' => 'pay_id']);

        return $rules;
    }
}
