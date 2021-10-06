<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Suburbs Model
 *
 * @method \App\Model\Entity\Suburb newEmptyEntity()
 * @method \App\Model\Entity\Suburb newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Suburb[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Suburb get($primaryKey, $options = [])
 * @method \App\Model\Entity\Suburb findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Suburb patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Suburb[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Suburb|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Suburb saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Suburb[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Suburb[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Suburb[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Suburb[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SuburbsTable extends Table
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

        $this->setTable('suburbs');
        $this->setDisplayField('postcode');
        $this->setPrimaryKey('postcode');
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
            ->integer('postcode')
            ->allowEmptyString('postcode', null, 'create');

        $validator
            ->scalar('subrub_name')
            ->requirePresence('subrub_name', 'create')
            ->notEmptyString('subrub_name');

        return $validator;
    }
}
