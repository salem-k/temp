<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commandegross Model
 *
 * @property \App\Model\Table\RepgrosTable&\Cake\ORM\Association\BelongsTo $Repgros
 * @property \App\Model\Table\RepsectorielsTable&\Cake\ORM\Association\BelongsTo $Repsectoriels
 *
 * @method \App\Model\Entity\Commandegros newEmptyEntity()
 * @method \App\Model\Entity\Commandegros newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Commandegros[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Commandegros get($primaryKey, $options = [])
 * @method \App\Model\Entity\Commandegros findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Commandegros patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Commandegros[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Commandegros|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commandegros saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commandegros[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commandegros[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commandegros[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commandegros[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CommandegrossTable extends Table
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

        $this->setTable('commandegross');
        $this->setDisplayField('repsommsects_id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Repgros', [
            'foreignKey' => 'repgros_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Repsectoriels', [
            'foreignKey' => 'repsectoriel_id',
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
            ->date('Date_debut')
            ->requirePresence('Date_debut', 'create')
            ->notEmptyDate('Date_debut');

        $validator
            ->date('Date_din')
            ->requirePresence('Date_din', 'create')
            ->notEmptyDate('Date_din');

        $validator
            ->scalar('repsommsects_id')
            ->maxLength('repsommsects_id', 120)
            ->requirePresence('repsommsects_id', 'create')
            ->notEmptyString('repsommsects_id');

        $validator
            ->scalar('repgros_id')
            ->maxLength('repgros_id', 120)
            ->notEmptyString('repgros_id');

        $validator
            ->scalar('repsectoriel_id')
            ->maxLength('repsectoriel_id', 120)
            ->notEmptyString('repsectoriel_id');

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
        $rules->add($rules->existsIn('repgros_id', 'Repgros'), ['errorField' => 'repgros_id']);
        $rules->add($rules->existsIn('repsectoriel_id', 'Repsectoriels'), ['errorField' => 'repsectoriel_id']);

        return $rules;
    }
}
