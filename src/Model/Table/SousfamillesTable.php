<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sousfamilles Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Sousfamille newEmptyEntity()
 * @method \App\Model\Entity\Sousfamille newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sousfamille[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sousfamille get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sousfamille findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sousfamille patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sousfamille[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sousfamille|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sousfamille saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sousfamille[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sousfamille[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sousfamille[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sousfamille[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SousfamillesTable extends Table
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

        $this->setTable('sousfamilles');
        $this->setDisplayField('Description');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'categories_id',
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
            ->maxLength('Description', 50)
            ->requirePresence('Description', 'create')
            ->notEmptyString('Description');

        $validator
            ->scalar('categories_id')
            ->maxLength('categories_id', 50)
            ->notEmptyString('categories_id');

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
        $rules->add($rules->existsIn('categories_id', 'Categories'), ['errorField' => 'categories_id']);

        return $rules;
    }
}
