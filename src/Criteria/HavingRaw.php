<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Criteria;

use Illuminate\Database\Eloquent\Model;
use BrianFaust\Eloquent\Repositories\Contracts\Repository;

class HavingRaw extends Criterion
{
    /**
     * @var
     */
    private $sql;

    /**
     * @var array
     */
    private $bindings;

    /**
     * @var string
     */
    private $boolean;

    /**
     * HavingRaw constructor.
     *
     * @param $sql
     * @param array  $bindings
     * @param string $boolean
     */
    public function __construct($sql, array $bindings = [], $boolean = 'and')
    {
        $this->sql = $sql;
        $this->bindings = $bindings;
        $this->boolean = $boolean;
    }

    /**
     * @param Model      $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply(Model $model, Repository $repository)
    {
        return $model->havingRaw($this->sql, $this->bindings, $this->boolean);
    }
}
