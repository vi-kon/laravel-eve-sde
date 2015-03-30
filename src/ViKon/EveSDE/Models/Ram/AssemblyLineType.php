<?php

namespace ViKon\EveSDE\Models\Ram;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AssemblyLineType
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Ram
 * @property integer                                                         $assembly_line_type_id
 * @property string                                                          $assembly_line_type_name
 * @property string                                                          $description
 * @property float                                                           $base_time_multiplier
 * @property float                                                           $base_material_multiplier
 * @property float                                                           $base_cost_multiplier
 * @property float                                                           $volume
 * @property integer                                                         $activity_id
 * @property float                                                           $min_cost_per_hour
 * @property-read \ViKon\EveSDE\Models\Ram\AssemblyLineStation               $assemblyLineStations
 * @property-read \ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerCategory $assemblyLineTypeDetailPerCategory
 * @property-read \ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup    $assemblyLineTypeDetailPerGroup
 * @property-read \ViKon\EveSDE\Models\Ram\Activity                          $activity
 * @property-read \ViKon\EveSDE\Models\Ram\InstallationTypeContent           $installationTypeContents
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineType
 *         whereAssemblyLineTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineType
 *         whereAssemblyLineTypeName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineType whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineType
 *         whereBaseTimeMultiplier($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineType
 *         whereBaseMaterialMultiplier($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineType
 *         whereBaseCostMultiplier($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineType whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineType whereActivityId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineType
 *         whereMinCostPerHour($value)
 */
class AssemblyLineType extends Model {
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
    protected $table = 'ram_assembly_line_types';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'ram_assembly_line_types';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assemblyLineStations() {
        return $this->belongsTo('ViKon\EveSDE\Models\Ram\AssemblyLineStation', 'assembly_line_type_id', 'assembly_line_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assemblyLineTypeDetailPerCategory() {
        return $this->belongsTo('ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerCategory', 'assembly_line_type_id', 'assembly_line_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assemblyLineTypeDetailPerGroup() {
        return $this->belongsTo('ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup', 'assembly_line_type_id', 'assembly_line_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activity() {
        return $this->belongsTo('ViKon\EveSDE\Models\Ram\Activity', 'activity_id', 'activity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function installationTypeContents() {
        return $this->belongsTo('ViKon\EveSDE\Models\Ram\InstallationTypeContent', 'assembly_line_type_id', 'assembly_line_type_id');
    }
}
