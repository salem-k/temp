<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Magasins Model
 *
 * @method \App\Model\Entity\Magasin newEmptyEntity()
 * @method \App\Model\Entity\Magasin newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Magasin[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Magasin get($primaryKey, $options = [])
 * @method \App\Model\Entity\Magasin findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Magasin patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Magasin[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Magasin|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Magasin saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Magasin[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Magasin[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Magasin[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Magasin[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MagasinsTable extends Table
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

        $this->setTable('magasins');
        $this->setDisplayField('Description');
        $this->setPrimaryKey('id');
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
            ->scalar('Adresse')
            ->maxLength('Adresse', 50)
            ->requirePresence('Adresse', 'create')
            ->notEmptyString('Adresse');

        return $validator;
    }
}
