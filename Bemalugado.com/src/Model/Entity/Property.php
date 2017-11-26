<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Property Entity
 *
 * @property int $id
 * @property int $id_user
 * @property string $kind
 * @property string $cep
 * @property string $state
 * @property string $city
 * @property string $neighborhood
 * @property string $address
 * @property int $number
 * @property string $complement
 * @property string $descricao
 * @property bool $status
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Contract $contract
 */
class Property extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id_user' => true,
        'kind' => true,
        'cep' => true,
        'state' => true,
        'city' => true,
        'neighborhood' => true,
        'address' => true,
        'number' => true,
        'complement' => true,
        'descricao' => true,
        'status' => true,
        'user' => true,
        'contract' => true
    ];
}
