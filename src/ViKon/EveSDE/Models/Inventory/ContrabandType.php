<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class ContrabandType extends Model {
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
    protected $table = 'inv_contraband_types';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_contraband_types';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function faction() {
        return $this->hasOne('ViKon\EveSDE\Models\Character\Faction', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }
}
