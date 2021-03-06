<?php

declare(strict_types=1);

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Eloquent\Repositories\Traits\Decorators\Cache;

use Illuminate\Database\Eloquent\Model;

trait ExceptionTrait
{
    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function modelNotFound(Model $model)
    {
        return $this->repository->modelNotFound($model);
    }
}
