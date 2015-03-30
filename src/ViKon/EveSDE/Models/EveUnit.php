<?php

namespace ViKon\EveSDE\Models;

use Illuminate\Database\Eloquent\Model;

class EveUnit extends Model {
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
    protected $table = 'eve_units';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'eve_units';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributeTypes() {
        return $this->hasMany('ViKon\EveSDE\Models\Damage\AttributeType', 'unit_id', 'unit_id');
    }
}
