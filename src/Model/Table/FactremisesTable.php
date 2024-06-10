<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Factremises Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\Factremise newEmptyEntity()
 * @method \App\Model\Entity\Factremise newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Factremise[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Factremise get($primaryKey, $options = [])
 * @method \App\Model\Entity\Factremise findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Factremise patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Factremise[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Factremise|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Factremise saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Factremise[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Factremise[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Factremise[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Factremise[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FactremisesTable extends Table
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

        $this->setTable('factremises');
        $this->setDisplayField('client_id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER',
        ]);
    }


  public function yourAction() {
    $this->loadModel('Factremises');

    // Fetch the 'nom' column values from the table
    $clients = $this->Factremises->find('list', [
      'keyField' => 'id', // Assuming 'id' is the primary key field
      'valueField' => 'nom' // Assuming 'nom' is the field you want to display in the dropdown
    ])->toArray();

    // Pass the $clients variable to the view
    $this->set('clients', $clients);
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
            ->scalar('client_id')
            ->maxLength('client_id', 120)
            ->notEmptyString('client_id');

        $validator
            ->integer('Reduction')
            ->requirePresence('Reduction', 'create')
            ->notEmptyString('Reduction');

        $validator
            ->dateTime('Date')
            ->requirePresence('Date', 'create')
            ->notEmptyDateTime('Date');

        $validator
            ->scalar('Commentaire')
            ->maxLength('Commentaire', 120)
            ->requirePresence('Commentaire', 'create')
            ->notEmptyString('Commentaire');

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
        $rules->add($rules->existsIn('client_id', 'Clients'), ['errorField' => 'client_id']);

        return $rules;
    }
}
