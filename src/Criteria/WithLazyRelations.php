<?php

namespace BrianFaust\Eloquent\Repositories\Criteria;

use BrianFaust\Eloquent\Repositories\Contracts\Repository;
use Illuminate\Database\Eloquent\Model;

class WithLazyRelations extends Criterion
{
    /**
     * @var
     */
    private $relations;

    /**
     * WithLazyRelations constructor.
     *
     * @param $relations
     */
    public function __construct($relations)
    {
        $this->relations = $relations;
    }

    /**
     * @param Model      $model
     * @param Repository $repository
     *
     * @return $this
     */
    public function apply(Model $model, Repository $repository)
    {
        return $model->load($this->relations);
    }
}
