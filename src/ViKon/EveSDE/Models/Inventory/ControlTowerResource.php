<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Inventory\ControlTowerResource
 *
 * @property integer                                                    $control_tower_type_id
 * @property integer                                                    $resource_type_id
 * @property \ViKon\EveSDE\Models\Inventory\ControlTowerResourcePurpose $purpose
 * @property integer                                                    $quantity
 * @property float                                                      $min_security_level
 * @property integer                                                    $faction_id
 * @property-read \ViKon\EveSDE\Models\Inventory\Type                   $controlTowerType
 * @property-read \ViKon\EveSDE\Models\Inventory\Type                   $resourceType
 * @property-read \ViKon\EveSDE\Models\Character\Faction                $faction
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ControlTowerResource
 *         whereControlTowerTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ControlTowerResource
 *         whereResourceTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ControlTowerResource
 *         wherePurpose($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ControlTowerResource
 *         whereQuantity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ControlTowerResource
 *         whereMinSecurityLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ControlTowerResource
 *         whereFactionId($value)
 */
class ControlTowerResource extends Model {
    /**
     *
     * Disable updated_at and created_at columns
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The database table used by the model (mysql).
     *
     * @var string
     */
    protected $table = 'inv_control_tower_resources';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_control_tower_resources';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function controlTowerType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'control_tower_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resourceType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'resource_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function purpose() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\ControlTowerResourcePurpose', 'purpose', 'purpose');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faction() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Faction', 'faction_id', 'faction_id');
    }
}
