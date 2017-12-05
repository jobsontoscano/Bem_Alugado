<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Properties Model
 *
 * @method \App\Model\Entity\Property get($primaryKey, $options = [])
 * @method \App\Model\Entity\Property newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Property[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Property|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Property patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Property[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Property findOrCreate($search, callable $callback = null, $options = [])
 */
class PropertiesTable extends Table
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

        $this->setTable('properties');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
            $this->belongsTo('Users',[
            'foreignKey' => 'id_user',
            'joinType' => 'INNER'
            ]);
        $this->hasMany('Contracts', [
            'foreignKey' => 'id_propertie',
            'joinType' => 'INNER'
            ]);
        $this->hasMany('Wishes',[
            'foreignKey' => 'id_propertie',
            'joinType' => 'INNER']);
        
       // $this->hasMany('Files',[
        //    'foreignKey' => 'id_file',
         //   'joinType' => 'INNER'
            $this->belongsTo('Files')
            ->setForeignKey('id_file') // nome da coluna da chave estrangeira
            ->setProperty('id_file'); //nome da propriedade que será criada no modelo
    }
    public function isOwnedBy($properties, $userId){
        return $this->exists(['id' => $properties, 'id_user' => $userId]);
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
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmpty('id_user');

        $validator
            ->integer('id_file')
            ->requirePresence('id_file', 'create')
            ->notEmpty('id_file');

        $validator
            ->scalar('kind')
            ->maxLength('kind', 40)
            ->requirePresence('kind', 'create')
            ->notEmpty('kind');

        $validator
            ->integer('number')
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->scalar('state')
            ->maxLength('state', 70)
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->scalar('complement')
            ->maxLength('complement', 70)
            ->requirePresence('complement', 'create')
            ->notEmpty('complement');

        $validator
            ->scalar('city')
            ->maxLength('city', 70)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 70)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->scalar('address')
            ->maxLength('address', 70)
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 70)
            ->requirePresence('cep', 'create')
            ->notEmpty('cep');

        $validator
            ->scalar('active_code')
            ->maxLength('active_code', 70)
            ->requirePresence('active_code', 'create')
            ->notEmpty('active_code');

        $validator
            ->boolean('ativo')
            ->requirePresence('ativo', 'create')
            ->notEmpty('ativo');

        $validator
            ->scalar('neighborhood')
            ->maxLength('neighborhood', 70)
            ->requirePresence('neighborhood', 'create')
            ->notEmpty('neighborhood');

        return $validator;
    }
}
