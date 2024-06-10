<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commandefournisseurs Model
 *
 * @property \App\Model\Table\DemandeoffredeprixesTable&\Cake\ORM\Association\BelongsTo $Demandeoffredeprixes
 * @property \App\Model\Table\FournisseursTable&\Cake\ORM\Association\BelongsTo $Fournisseurs
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 * @property \App\Model\Table\LivraisonsTable&\Cake\ORM\Association\BelongsTo $Livraisons
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\BelongsTo $Factures
 * @property \App\Model\Table\LivraisonsTable&\Cake\ORM\Association\HasMany $Livraisons
 *
 * @method \App\Model\Entity\Commandefournisseur newEmptyEntity()
 * @method \App\Model\Entity\Commandefournisseur newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Commandefournisseur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Commandefournisseur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Commandefournisseur findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Commandefournisseur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Commandefournisseur[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Commandefournisseur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commandefournisseur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commandefournisseur[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commandefournisseur[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commandefournisseur[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Commandefournisseur[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CommandefournisseursTable extends Table
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

        $this->setTable('commandefournisseurs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Demandeoffredeprixes', [
            'foreignKey' => 'demandeoffredeprix_id',
        ]);
        $this->belongsTo('Fournisseurs', [
            'foreignKey' => 'fournisseur_id',
        ]);
        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->belongsTo('Depots', [
            'foreignKey' => 'depot_id',
        ]);
        $this->belongsTo('Livraisons', [
            'foreignKey' => 'livraison_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Factures', [
            'foreignKey' => 'facture_id',
        ]);
        $this->hasMany('Livraisons', [
            'foreignKey' => 'commandefournisseur_id',
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
            ->integer('demandeoffredeprix_id')
            ->allowEmptyString('demandeoffredeprix_id');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 255)
            ->allowEmptyString('numero');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->integer('fournisseur_id')
            ->allowEmptyString('fournisseur_id');

        $validator
            ->integer('pointdevente_id')
            ->allowEmptyString('pointdevente_id');

        $validator
            ->integer('depot_id')
            ->allowEmptyString('depot_id');

        $validator
            ->integer('cartecarburant_id')
            ->allowEmptyString('cartecarburant_id');

        $validator
            ->integer('materieltransport_id')
            ->allowEmptyString('materieltransport_id');

        $validator
            ->integer('chauffeur')
            ->allowEmptyString('chauffeur');

        $validator
            ->integer('convoyeur')
            ->allowEmptyString('convoyeur');

        $validator
            ->integer('valide')
            ->notEmptyString('valide');

        $validator
            ->decimal('remise')
            ->allowEmptyString('remise');

        $validator
            ->decimal('tva')
            ->allowEmptyString('tva');

        $validator
            ->decimal('fodec')
            ->allowEmptyString('fodec');

        $validator
            ->decimal('ttc')
            ->allowEmptyString('ttc');

        $validator
            ->decimal('ht')
            ->allowEmptyString('ht');

        $validator
            ->integer('livraison_id')
            ->notEmptyString('livraison_id');

        $validator
            ->integer('etatliv')
            ->notEmptyString('etatliv');

        $validator
            ->integer('typecommande')
            ->allowEmptyString('typecommande');

        $validator
            ->integer('projet_id')
            ->allowEmptyString('projet_id');

        $validator
            ->integer('facture_id')
            ->allowEmptyString('facture_id');

        $validator
            ->integer('conteneur_id')
            ->allowEmptyString('conteneur_id');

        $validator
            ->integer('tvaOnOff')
            ->allowEmptyString('tvaOnOff');

        $validator
            ->integer('envoiemail')
            ->allowEmptyString('envoiemail');

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
        $rules->add($rules->existsIn('demandeoffredeprix_id', 'Demandeoffredeprixes'), ['errorField' => 'demandeoffredeprix_id']);
        $rules->add($rules->existsIn('fournisseur_id', 'Fournisseurs'), ['errorField' => 'fournisseur_id']);
        $rules->add($rules->existsIn('pointdevente_id', 'Pointdeventes'), ['errorField' => 'pointdevente_id']);
        $rules->add($rules->existsIn('depot_id', 'Depots'), ['errorField' => 'depot_id']);
        $rules->add($rules->existsIn('livraison_id', 'Livraisons'), ['errorField' => 'livraison_id']);
        $rules->add($rules->existsIn('facture_id', 'Factures'), ['errorField' => 'facture_id']);

        return $rules;
    }
}
