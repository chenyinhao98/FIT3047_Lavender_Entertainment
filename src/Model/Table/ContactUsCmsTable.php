<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactUsCms Model
 *
 * @method \App\Model\Entity\ContactUsCm newEmptyEntity()
 * @method \App\Model\Entity\ContactUsCm newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ContactUsCm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactUsCm get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContactUsCm findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ContactUsCm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContactUsCm[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactUsCm|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactUsCm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactUsCm[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContactUsCm[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContactUsCm[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContactUsCm[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ContactUsCmsTable extends Table
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

        $this->setTable('contact_us_cms');
        $this->setDisplayField('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('header')
            ->maxLength('header', 64)
            ->requirePresence('header', 'create')
            ->notEmptyString('header');

        $validator
            ->scalar('body')
            ->maxLength('body', 1024)
            ->requirePresence('body', 'create')
            ->notEmptyString('body');

        return $validator;
    }
}

