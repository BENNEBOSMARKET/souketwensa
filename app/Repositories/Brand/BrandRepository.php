<?php

namespace App\Repositories\Brand;

use App\Models\Brand;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Brand\BrandRepositoryInterface;

class BrandRepository extends BaseRepository implements BrandRepositoryInterface
{
    public function __construct(Brand $model)
    {
        parent::__construct($model);
    }

}
