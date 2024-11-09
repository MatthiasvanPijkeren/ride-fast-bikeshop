<?php

namespace App\Blueprints\Pages;

use Tdwesten\StatamicBuilder\Blueprint;
use Tdwesten\StatamicBuilder\FieldTypes\Section;
use Tdwesten\StatamicBuilder\FieldTypes\Tab;
use Tdwesten\StatamicBuilder\FieldTypes\Text;

class ContactPageBlueprint extends Blueprint
{
    /**
     * The blueprint title.
     *
     * @var string
     */
    public $title = 'Contact';

    /**
     * The blueprint handle.
     *
     * @var string
     */
    public $handle = 'contact';

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
