<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commandeclients Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 * @property \App\Model\Table\CommandeclientsTable&\Cake\ORM\Association\BelongsTo $Commandeclients
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\BelongsTo $Factures
 * @property \App\Model\Table\CommandeclientsTable&\Cake\ORM\Association\HasMany $Commandeclients
 *
 * @method \App\Model\Entity\Commandeclient newEmptyEntity()
 * @method \App\Model\Entity\Commandeclient newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Commandeclient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Commandeclient get($primaryKey, $options = [])
 * @method \App\Model\Entity\Commandeclient findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Commandeclient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Commandeclient[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Commandeclient|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commandeclient saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commandeclient[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commandeclient[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commandeclient[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commandeclient[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CommandeclientsTable extends Table
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

        $this->setTable('commandeclients');
        $this->setDisplayField('code');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Depots', [
            'foreignKey' => 'depot_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Commandeclients', [
            'foreignKey' => 'commandeclient_id',
        ]);
        $this->belongsTo('Factures', [
            'foreignKey' => 'facture_id',
        ]);
        $this->hasMany('Commandeclients', [
            'foreignKey' => 'commandeclient_id',
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */

}
