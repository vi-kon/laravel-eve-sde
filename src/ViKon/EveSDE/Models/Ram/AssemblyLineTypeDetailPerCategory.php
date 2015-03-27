<?php

namespace ViKon\EveSDE\Models\Ram;

use Illuminate\Database\Eloquent\Model;

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
    public function category() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Categories', 'category_id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function assemblyLineType() {
        return $this->hasOne('ViKon\EveSDE\Models\Ram\AssemblyLineTypes', 'assembly_line_type_id', 'assembly_line_type_id');
    }
}
