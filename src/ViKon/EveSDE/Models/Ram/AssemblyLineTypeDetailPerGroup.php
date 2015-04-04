<?php

namespace ViKon\EveSDE\Models\Ram;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup
 *
 * @property integer                                        $assembly_line_type_id
 * @property integer                                        $group_id
 * @property float                                          $time_multiplier
 * @property float                                          $material_multiplier
 * @property float                                          $cost_multiplier
 * @property-read \ViKon\EveSDE\Models\Ram\AssemblyLineType $assemblyLineType
 * @property-read \ViKon\EveSDE\Models\Inventory\Group      $group
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup
 *         whereAssemblyLineTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup
 *         whereGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup
 *         whereTimeMultiplier($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup
 *         whereMaterialMultiplier($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup
 *         whereCostMultiplier($value)
 */
class AssemblyLineTypeDetailPerGroup extends Model {
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
    protected $table = 'ram_assembly_line_type_detail_per_group';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'ram_assembly_line_type_detail_per_group';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assemblyLineType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Ram\AssemblyLineType', 'assembly_line_type_id', 'assembly_line_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Group', 'group_id', 'group_id');
    }
}
