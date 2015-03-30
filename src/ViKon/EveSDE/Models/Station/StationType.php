<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StationType
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Station
 * @property integer
 *           $station_type_id
 * @property float                                                                                        $dock_entry_x
 * @property float                                                                                        $dock_entry_y
 * @property float                                                                                        $dock_entry_z
 * @property float
 *           $dock_orientation_x
 * @property float
 *           $dock_orientation_y
 * @property float
 *           $dock_orientation_z
 * @property integer                                                                                      $operation_id
 * @property integer                                                                                      $office_slots
 * @property float
 *           $reprocessing_efficiency
 * @property boolean                                                                                      $conquerable
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Ram\AssemblyLineStation[]
 *                $assemblyLineStations
 * @property-read \ViKon\EveSDE\Models\Inventory\Type                                                     $stationType
 * @property-read \ViKon\EveSDE\Models\Station\Operation                                                  $operation
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Station\Station[]         $stations
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType
 *         whereStationTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType whereDockEntryX($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType whereDockEntryY($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType whereDockEntryZ($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType
 *         whereDockOrientationX($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType
 *         whereDockOrientationY($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType
 *         whereDockOrientationZ($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType whereOperationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType whereOfficeSlots($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType
 *         whereReprocessingEfficiency($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\StationType whereConquerable($value)
 */
class StationType extends Model {
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
    protected $table = 'sta_station_types';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'sta_station_types';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assemblyLineStations() {
        return $this->hasMany('ViKon\EveSDE\Models\Ram\AssemblyLineStation', 'station_type_id', 'station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function stationType() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\Operation', 'operation_id', 'operation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Station', 'station_type_id', 'station_type_id');
    }
}
