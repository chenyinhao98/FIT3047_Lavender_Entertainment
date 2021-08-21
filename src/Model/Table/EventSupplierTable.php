<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventSupplier Model
 *
 * @method \App\Model\Entity\EventSupplier newEmptyEntity()
 * @method \App\Model\Entity\EventSupplier newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EventSupplier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EventSupplier get($primaryKey, $options = [])
 * @method \App\Model\Entity\EventSupplier findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EventSupplier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EventSupplier[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EventSupplier|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventSupplier saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventSupplier[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventSupplier[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventSupplier[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventSupplier[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EventSupplierTable extends Table
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

        $this->setTable('event_supplier');
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
            ->integer('eventID')
            ->requirePresence('eventID', 'create')
            ->notEmptyString('eventID');

        $validator
            ->integer('supplierID')
            ->requirePresence('supplierID', 'create')
            ->notEmptyString('supplierID');

        return $validator;
    }
}
