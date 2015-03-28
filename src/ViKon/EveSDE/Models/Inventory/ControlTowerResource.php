<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

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
    public function faction() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Factions', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function controlTowerType() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'control_tower_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function resourceType() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'resource_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function purpose() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\ControlTowerResourcePurposes', 'purpose', 'purpose');
    }
}
