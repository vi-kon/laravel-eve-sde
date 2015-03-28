<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

class Denormalize extends Model {
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
    protected $table = 'map_denormalize';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_denormalize';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function celestialStatistics() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\CelestialStatistics', 'item_id', 'celestial_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orbit() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Denormalize', 'item_id', 'orbit_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denormalize() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Denormalize', 'orbit_id', 'item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Groups', 'group_id', 'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solarSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystems', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function constellation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Constellations', 'constellation_id', 'constellation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Regions', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locationScenes() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\LocationScenes', 'item_id', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locationWormholeClasses() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\LocationWormholeClasses', 'item_id', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stations() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\Stations', 'item_id', 'station_id');
    }
}
