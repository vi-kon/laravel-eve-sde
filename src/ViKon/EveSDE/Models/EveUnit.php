<?php

namespace ViKon\EveSDE\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\EveUnit
 *
 * @property integer                                                                                   $unit_id
 * @property string                                                                                    $unit_name
 * @property string                                                                                    $display_name
 * @property string                                                                                    $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Damage\AttributeType[] $attributeTypes
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\EveUnit whereUnitId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\EveUnit whereUnitName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\EveUnit whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\EveUnit whereDescription($value)
 */
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
