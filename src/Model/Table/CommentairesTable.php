<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commentaires Model
 *
 * @property \App\Model\Table\RepgrosTable&\Cake\ORM\Association\BelongsTo $Repgros
 * @property \App\Model\Table\RepsectorielsTable&\Cake\ORM\Association\BelongsTo $Repsectoriels
 *
 * @method \App\Model\Entity\Commentaire newEmptyEntity()
 * @method \App\Model\Entity\Commentaire newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Commentaire[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Commentaire get($primaryKey, $options = [])
 * @method \App\Model\Entity\Commentaire findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Commentaire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Commentaire[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Commentaire|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commentaire saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commentaire[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commentaire[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commentaire[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commentaire[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CommentairesTable extends Table
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

        $this->setTable('commentaires');
        $this->setDisplayField('Description');
        $this->setPrimaryKey('id');

        $this->belongsTo('Repgros', [
            'foreignKey' => 'Repgros_id',
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
            ->scalar('Description')
            ->maxLength('Description', 255)
            ->requirePresence('Description', 'create')
            ->notEmptyString('Description');

        $validator
            ->scalar('Repgros_id')
            ->maxLength('Repgros_id', 120)
            ->notEmptyString('Repgros_id');

        $validator
            ->dateTime('Date')
            ->requirePresence('Date', 'create')
            ->notEmptyDateTime('Date');

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
        $rules->add($rules->existsIn('Repgros_id', 'Repgros'), ['errorField' => 'Repgros_id']);
        $rules->add($rules->existsIn('repsectoriel_id', 'Repsectoriels'), ['errorField' => 'repsectoriel_id']);

        return $rules;
    }
}
