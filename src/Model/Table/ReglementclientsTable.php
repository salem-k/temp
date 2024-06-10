<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reglementclients Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\UtilisateursTable&\Cake\ORM\Association\BelongsTo $Utilisateurs
 *
 * @method \App\Model\Entity\Reglementclient newEmptyEntity()
 * @method \App\Model\Entity\Reglementclient newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Reglementclient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reglementclient get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reglementclient findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Reglementclient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reglementclient[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reglementclient|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reglementclient saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reglementclient[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reglementclient[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reglementclient[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reglementclient[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReglementclientsTable extends Table
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

        $this->setTable('reglementclients');
        $this->setDisplayField('emi');
        $this->setPrimaryKey('id');

      $this->belongsTo('Clients', [
        'foreignKey' => 'client_id',
        'propertyName' => 'client' // Specify propertyName to avoid conflict
        ]);
        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->belongsTo('Utilisateurs', [
            'foreignKey' => 'utilisateur_id',
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
            ->integer('client_id')
            ->allowEmptyString('client_id');

        $validator
            ->date('Date')
            ->allowEmptyDate('Date');

        $validator
            ->decimal('Montant')
            ->allowEmptyString('Montant');

        $validator
            ->decimal('montantaffecte')
            ->allowEmptyString('montantaffecte');

        $validator
            ->integer('pointdevente_id')
            ->allowEmptyString('pointdevente_id');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 255)
            ->allowEmptyString('numero');

        $validator
            ->scalar('numeroconca')
            ->maxLength('numeroconca', 255)
            ->allowEmptyString('numeroconca');

        $validator
            ->scalar('SR')
            ->maxLength('SR', 255)
            ->allowEmptyString('SR');

        $validator
            ->scalar('NB')
            ->maxLength('NB', 255)
            ->allowEmptyString('NB');

        $validator
            ->scalar('NumNB')
            ->maxLength('NumNB', 255)
            ->allowEmptyString('NumNB');

        $validator
            ->scalar('client')
            ->maxLength('client', 255)
            ->allowEmptyString('client');

        $validator
            ->scalar('mg')
            ->maxLength('mg', 255)
            ->allowEmptyString('mg');

        $validator
            ->integer('exercice_id')
            ->allowEmptyString('exercice_id');

        $validator
            ->integer('utilisateur_id')
            ->allowEmptyString('utilisateur_id');

        $validator
            ->integer('type')
            ->allowEmptyString('type');

        $validator
            ->integer('affectation_id')
            ->notEmptyString('affectation_id');

        $validator
            ->scalar('emi')
            ->maxLength('emi', 255)
            ->notEmptyString('emi');

        $validator
            ->scalar('numeropieceintegre')
            ->maxLength('numeropieceintegre', 255)
            ->allowEmptyString('numeropieceintegre');

        $validator
            ->integer('group_id')
            ->allowEmptyString('group_id');

        $validator
            ->decimal('differance')
            ->allowEmptyString('differance');

        $validator
            ->scalar('observation')
            ->maxLength('observation', 255)
            ->allowEmptyString('observation');

        $validator
            ->integer('projet_id')
            ->allowEmptyString('projet_id');

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
        $rules->add($rules->existsIn('pointdevente_id', 'Pointdeventes'), ['errorField' => 'pointdevente_id']);
        $rules->add($rules->existsIn('utilisateur_id', 'Utilisateurs'), ['errorField' => 'utilisateur_id']);

        return $rules;
    }
}
