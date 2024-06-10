<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Depots Model
 *
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\BonreceptionstocksTable&\Cake\ORM\Association\HasMany $Bonreceptionstocks
 * @property \App\Model\Table\BontransfertsTable&\Cake\ORM\Association\HasMany $Bontransferts
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\HasMany $Clients
 * @property \App\Model\Table\FactureavoirsTable&\Cake\ORM\Association\HasMany $Factureavoirs
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\HasMany $Factures
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\UtilisateursTable&\Cake\ORM\Association\HasMany $Utilisateurs
 *
 * @method \App\Model\Entity\Depot newEmptyEntity()
 * @method \App\Model\Entity\Depot newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Depot[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Depot get($primaryKey, $options = [])
 * @method \App\Model\Entity\Depot findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Depot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Depot[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Depot|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Depot saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Depot[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Depot[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Depot[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Depot[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DepotsTable extends Table
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

        $this->setTable('depots');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Bonreceptionstocks', [
            'foreignKey' => 'depot_id',
        ]);
        $this->hasMany('Bontransferts', [
            'foreignKey' => 'depot_id',
        ]);
        $this->hasMany('Clients', [
            'foreignKey' => 'depot_id',
        ]);
        $this->hasMany('Factureavoirs', [
            'foreignKey' => 'depot_id',
        ]);
        $this->hasMany('Factures', [
            'foreignKey' => 'depot_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'depot_id',
        ]);
        $this->hasMany('Utilisateurs', [
            'foreignKey' => 'depot_id',
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
            ->scalar('code')
            ->maxLength('code', 255)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 255)
            ->requirePresence('adresse', 'create')
            ->notEmptyString('adresse');

        $validator
            ->scalar('matriclefiscale')
            ->maxLength('matriclefiscale', 255)
            ->allowEmptyString('matriclefiscale');

        $validator
            ->integer('pointdevente_id')
            ->notEmptyString('pointdevente_id');

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
        $rules->add($rules->existsIn('pointdevente_id', 'Pointdeventes'), ['errorField' => 'pointdevente_id']);

        return $rules;
    }
}
