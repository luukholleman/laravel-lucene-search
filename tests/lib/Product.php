<?php namespace tests\lib;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Nqxcode\LuceneSearch\Searchable;

/**
 * Class Product
 * @property boolean $publish
 * @method Builder wherePublish
 * @package tests\lib
 */
class Product extends Model implements Searchable
{
    /**
     * @inheritdoc
     */
    public function isSearchable()
    {
        return $this->publish;
    }

    /**
     * @inheritdoc
     */
    public function allSearchable()
    {
        return $this->wherePublish(1)->get();
    }
}
