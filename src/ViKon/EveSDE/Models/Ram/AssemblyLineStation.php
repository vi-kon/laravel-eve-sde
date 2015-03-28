<?php

namespace ViKon\EveSDE\Models\Ram;

use Illuminate\Database\Eloquent\Model;

class AssemblyLineStation extends Model {
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
    protected $table = 'ram_assembly_line_stations';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'ram_assembly_line_stations';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solarSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystems', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Regions', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function assemblyLineType() {
        return $this->hasOne('ViKon\EveSDE\Models\Ram\AssemblyLineTypes', 'assembly_line_type_id', 'assembly_line_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stationType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationTypes', 'station_type_id', 'station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporations', 'corporation_id', 'owner_id');
    }
}
