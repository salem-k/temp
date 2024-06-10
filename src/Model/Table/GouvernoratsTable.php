<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gouvernorats Model
 *
 * @property \App\Model\Table\PaysTable&\Cake\ORM\Association\BelongsTo $Pays
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\HasMany $Clients
 * @property \App\Model\Table\FournisseursTable&\Cake\ORM\Association\HasMany $Fournisseurs
 *
 * @method \App\Model\Entity\Gouvernorat newEmptyEntity()
 * @method \App\Model\Entity\Gouvernorat newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Gouvernorat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gouvernorat get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gouvernorat findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Gouvernorat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gouvernorat[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gouvernorat|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gouvernorat saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gouvernorat[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gouvernorat[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gouvernorat[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gouvernorat[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class GouvernoratsTable extends Table
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

        $this->setTable('gouvernorats');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pays', [
            'foreignKey' => 'pay_id',
        ]);
        $this->hasMany('Clients', [
            'foreignKey' => 'gouvernorat_id',
        ]);
        $this->hasMany('Fournisseurs', [
            'foreignKey' => 'gouvernorat_id',
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
            ->integer('codepostale')
            ->requirePresence('codepostale', 'create')
            ->notEmptyString('codepostale');

        $validator
            ->scalar('code')
            ->maxLength('code', 100)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->integer('pay_id')
            ->allowEmptyString('pay_id');

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
        $rules->add($rules->existsIn('pay_id', 'Pays'), ['errorField' => 'pay_id']);

        return $rules;
    }
}
