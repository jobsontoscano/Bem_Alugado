<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contracts Model
 *
 * @method \App\Model\Entity\Contract get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contract newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contract[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contract|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contract patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contract[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contract findOrCreate($search, callable $callback = null, $options = [])
 */
class ContractsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('contracts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers',[
            'foreignKey' => 'id_customer_fk',
            'joinType' => 'INNER'
            ]);
        $this->belongsTo('Properties', [
            'foreignKey' => 'id_propertie_fk',
            'joinType' => 'INNER'
            ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_customer')
            ->requirePresence('id_customer', 'create')
            ->notEmpty('id_customer');

        $validator
            ->integer('id_propertie')
            ->requirePresence('id_propertie', 'create')
            ->notEmpty('id_propertie');

        $validator
            ->dateTime('duracao_contract')
            ->requirePresence('duracao_contract', 'create')
            ->notEmpty('duracao_contract');

        $validator
            ->dateTime('end_contract')
            ->requirePresence('end_contract', 'create')
            ->notEmpty('end_contract');

        return $validator;
    }
}
