<?php

namespace ViKon\EveSDE\Models;

use Illuminate\Database\Eloquent\Model;

class TranslationTable extends Model {
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
    protected $table = 'translation_tables';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'translation_tables';


}
