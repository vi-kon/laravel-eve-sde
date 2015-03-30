<?php

namespace ViKon\EveSDE\Models\Ram;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InstallationTypeContent
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Ram
 * @property integer                                        $installation_type_id
 * @property integer                                        $assembly_line_type_id
 * @property integer                                        $quantity
 * @property-read \ViKon\EveSDE\Models\Ram\AssemblyLineType $assemblyLineType
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\InstallationTypeContent
 *         whereInstallationTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\InstallationTypeContent
 *         whereAssemblyLineTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\InstallationTypeContent
 *         whereQuantity($value)
 */
class InstallationTypeContent extends Model {
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
    protected $table = 'ram_installation_type_contents';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'ram_installation_type_contents';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function assemblyLineType() {
        return $this->hasOne('ViKon\EveSDE\Models\Ram\AssemblyLineType', 'assembly_line_type_id', 'assembly_line_type_id');
    }
}
