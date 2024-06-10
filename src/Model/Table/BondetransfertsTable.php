<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bondetransferts Model
 *
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 * @property \App\Model\Table\BonreceptionstocksTable&\Cake\ORM\Association\BelongsTo $Bonreceptionstocks
 *
 * @method \App\Model\Entity\Bondetransfert newEmptyEntity()
 * @method \App\Model\Entity\Bondetransfert newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Bondetransfert[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bondetransfert get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bondetransfert findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Bondetransfert patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bondetransfert[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bondetransfert|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bondetransfert saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bondetransfert[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bondetransfert[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bondetransfert[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bondetransfert[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BondetransfertsTable extends Table
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

        $this->setTable('bondetransferts');
        $this->setDisplayField('numero');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Depots', [
            'foreignKey' => 'depot_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Bonreceptionstocks', [
            'foreignKey' => 'bonreceptionstock_id',
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
            ->scalar('numero')
            ->maxLength('numero', 255)
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('pointdevente_id')
            ->notEmptyString('pointdevente_id');

        $validator
            ->integer('depot_id')
            ->notEmptyString('depot_id');

        $validator
            ->integer('depot_to_id')
            ->requirePresence('depot_to_id', 'create')
            ->notEmptyString('depot_to_id');

        $validator
            ->integer('bonreceptionstock_id')
            ->allowEmptyString('bonreceptionstock_id');

        $validator
            ->numeric('kilometragedepart')
            ->requirePresence('kilometragedepart', 'create')
            ->notEmptyString('kilometragedepart');

        $validator
            ->numeric('kilometragearrive')
            ->requirePresence('kilometragearrive', 'create')
            ->notEmptyString('kilometragearrive');

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
        $rules->add($rules->existsIn('depot_id', 'Depots'), ['errorField' => 'depot_id']);
        $rules->add($rules->existsIn('bonreceptionstock_id', 'Bonreceptionstocks'), ['errorField' => 'bonreceptionstock_id']);

        return $rules;
    }
}
