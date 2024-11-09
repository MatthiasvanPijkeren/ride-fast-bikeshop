<?php

namespace App\Blueprints\Globals;

use Tdwesten\StatamicBuilder\Blueprint;
use Tdwesten\StatamicBuilder\FieldTypes\Section;
use Tdwesten\StatamicBuilder\FieldTypes\Tab;
use Tdwesten\StatamicBuilder\FieldTypes\Text;

class FooterBlueprint extends Blueprint
{
    /**
     * The blueprint title.
     *
     * @var string
     */
    public $title = 'Footer';

    /**
     * The blueprint handle.
     *
     * @var string
     */
    public $handle = 'footer';

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
