<?php

namespace App\Blueprints\Pages;

use Tdwesten\StatamicBuilder\Blueprint;
use Tdwesten\StatamicBuilder\FieldTypes\Section;
use Tdwesten\StatamicBuilder\FieldTypes\Tab;
use Tdwesten\StatamicBuilder\FieldTypes\Text;

class HomePageBlueprint extends Blueprint
{
    /**
     * The blueprint title.
     *
     * @var string
     */
    public $title = 'Home';

    /**
     * The blueprint handle.
     *
     * @var string
     */
    public $handle = 'home';

    /**
     * Hide the blueprint from the blueprint dropdown.
     *
     * @var bool
     */
    public $hidden = false;

    public function registerTabs(): array
    {
        return [
            Tab::make('General', [
                Section::make('General', [
                    Text::make('title')
                        ->displayName('Title')
                        ->required(),
                ]),
            ]),
        ];
    }
}
