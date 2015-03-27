<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

class Races extends Model {
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
    protected $table = 'chr_races';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'chr_races';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bloodlines() {
        return $this->hasMany('ViKon\EveSDE\Models\Character\Bloodlines', 'race_id', 'race_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function types() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\Types', 'race_id', 'race_id');
    }
}
