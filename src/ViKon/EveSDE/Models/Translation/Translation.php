<?php

namespace ViKon\EveSDE\Models\Translation;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model {
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
    protected $table = 'trn_translations';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'trn_translations';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tc() {
        return $this->hasOne('ViKon\EveSDE\Models\Translation\TranslationColumn', 'tc_id', 'tc_id');
    }
}
