<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bonderetoures Model
 *
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 *
 * @method \App\Model\Entity\Bonderetoure newEmptyEntity()
 * @method \App\Model\Entity\Bonderetoure newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Bonderetoure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bonderetoure get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bonderetoure findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Bonderetoure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bonderetoure[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bonderetoure|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bonderetoure saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bonderetoure[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bonderetoure[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bonderetoure[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bonderetoure[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BonderetouresTable extends Table
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

        $this->setTable('bonderetoures');
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
            ->scalar('numero')
            ->maxLength('numero', 255)
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->integer('kilometragedepart')
            ->allowEmptyString('kilometragedepart');

        $validator
            ->integer('kilometragearrive')
            ->allowEmptyString('kilometragearrive');

        $validator
            ->integer('poste')
            ->requirePresence('poste', 'create')
            ->notEmptyString('poste');

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

        return $rules;
    }
}
