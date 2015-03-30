<?php

namespace ViKon\EveSDE\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TranslationTable
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models
 * @property string  $source_table
 * @property string  $destination_table
 * @property string  $translated_key
 * @property integer $tc_group_id
 * @property integer $tc_id
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\TranslationTable whereSourceTable($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\TranslationTable whereDestinationTable($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\TranslationTable whereTranslatedKey($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\TranslationTable whereTcGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\TranslationTable whereTcId($value)
 */
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
