<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

class TypeEffects extends Model {
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
    protected $table = 'dgm_type_effects';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'dgm_type_effects';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function effect() {
        return $this->hasOne('ViKon\EveSDE\Models\Damage\Effects', 'effect_id', 'effect_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'type_id');
    }
}