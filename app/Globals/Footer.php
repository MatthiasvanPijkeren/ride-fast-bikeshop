<?php

namespace App\Globals;

use Tdwesten\StatamicBuilder\BaseGlobalSet;

class Footer extends BaseGlobalSet
{
    /**
     * The handle for this global set
     *
     * Example: return 'footer';
     */
    public static function handle(): string
    {
        return 'footer';
    }

    /**
     * The title for this global set
     *
     * Example: return 'Footer';
     */
    public function title(): string
    {
        return 'Footer';
    }

    /**
     * The sites for this global set
     *
     * Example: return ['default'] or ['default', 'en', 'de'];
     */
    public function sites(): array
    {
        return ['default'];
    }
}
