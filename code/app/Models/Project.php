<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Project extends Model
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'description',
        'headline',
        'url'
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'screengrab' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 16 / 9,
                ],
            ],
        ],
    ];


//-------- Mutators & Accessor

    public function getDomainAttribute($value)
    {
        return parse_url($this->url)['host'];
    }

    public function getDescriptionTailwindAttribute($value)
    {
        $description_para_class = str_replace('<p>', '<p class="mt-16">', $this->description);
        return $description_para_class;
    }




}
