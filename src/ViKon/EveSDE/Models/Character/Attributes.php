<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

class Attributes extends Model {
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
    protected $table = 'chr_attributes';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'chr_attributes';


}
