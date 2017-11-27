<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Property Entity
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_file
 * @property string $kind
 * @property int $number
 * @property string $state
 * @property string $complement
 * @property string $city
 * @property string $descricao
 * @property bool $status
 * @property string $address
 * @property string $cep
 * @property string $active_code
 * @property bool $ativo
 * @property string $neighborhood
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
        'id_file' => true,
        'kind' => true,
        'number' => true,
        'state' => true,
        'complement' => true,
        'city' => true,
        'descricao' => true,
        'status' => true,
        'address' => true,
        'cep' => true,
        'active_code' => true,
        'ativo' => true,
        'neighborhood' => true
    ];
}
