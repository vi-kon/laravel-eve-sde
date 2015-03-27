<?php

namespace ViKon\EveSDE\Models\Translation;

use Illuminate\Database\Eloquent\Model;

class TranslationLanguages extends Model {
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
    protected $table = 'trn_translation_languages';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'trn_translation_languages';


}
