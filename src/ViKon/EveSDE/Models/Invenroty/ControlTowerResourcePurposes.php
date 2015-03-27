<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class ControlTowerResourcePurposes extends Model {
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
    protected $table = 'inv_control_tower_resource_purposes';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_control_tower_resource_purposes';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function controlTowerResources() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\ControlTowerResources', 'purpose', 'purpose');
    }
}