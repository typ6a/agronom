<?php

namespace App\Repositories;

use App\Models\Source;

class SourcesRepository
{

    public function mainSource(Source $source)
    {
        return Source::whereNull($source->parent_id)->get();
    }
    
    
}





 