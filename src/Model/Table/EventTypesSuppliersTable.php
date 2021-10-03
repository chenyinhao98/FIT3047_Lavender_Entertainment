<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventTypesSuppliers Model
 *
 * @property \App\Model\Table\SuppliersTable&\Cake\ORM\Association\BelongsTo $Suppliers
 * @property \App\Model\Table\EventTypesTable&\Cake\ORM\Association\BelongsTo $EventTypes
 *
 * @method \App\Model\Entity\EventTypesSupplier newEmptyEntity()
 * @method \App\Model\Entity\EventTypesSupplier newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesSupplier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesSupplier get($primaryKey, $options = [])
 * @method \App\Model\Entity\EventTypesSupplier findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EventTypesSupplier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesSupplier[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesSupplier|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventTypesSupplier saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventTypesSupplier[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTypesSupplier[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTypesSupplier[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTypesSupplier[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EventTypesSuppliersTable extends Table
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

        $this->setTable('event_types_suppliers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Suppliers', [
            'foreignKey' => 'supplier_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('EventTypes', [
            'foreignKey' => 'event_type_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

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
        $rules->add($rules->existsIn(['supplier_id'], 'Suppliers'), ['errorField' => 'supplier_id']);
        $rules->add($rules->existsIn(['event_type_id'], 'EventTypes'), ['errorField' => 'event_type_id']);

        return $rules;
    }
}
