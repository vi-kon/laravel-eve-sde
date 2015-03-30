<?php

namespace ViKon\EveSDE\Models\Ram;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AssemblyLineTypeDetailPerCategory
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Ram
 * @property integer                                        $assembly_line_type_id
 * @property integer                                        $category_id
 * @property float                                          $time_multiplier
 * @property float                                          $material_multiplier
 * @property float                                          $cost_multiplier
 * @property-read \ViKon\EveSDE\Models\Ram\AssemblyLineType $assemblyLineType
 * @property-read \ViKon\EveSDE\Models\Inventory\Category   $category
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerCategory
 *         whereAssemblyLineTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerCategory
 *         whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerCategory
 *         whereTimeMultiplier($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerCategory
 *         whereMaterialMultiplier($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerCategory
 *         whereCostMultiplier($value)
 */
class AssemblyLineTypeDetailPerCategory extends Model {
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
    protected $table = 'ram_assembly_line_type_detail_per_category';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'ram_assembly_line_type_detail_per_category';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function assemblyLineType() {
        return $this->hasOne('ViKon\EveSDE\Models\Ram\AssemblyLineType', 'assembly_line_type_id', 'assembly_line_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Category', 'category_id', 'category_id');
    }
}
