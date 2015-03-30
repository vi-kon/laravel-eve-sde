<?php

namespace ViKon\EveSDE\Models\Ram;

use Illuminate\Database\Eloquent\Model;

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
