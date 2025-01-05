<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class EntryMeta extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.entry-meta',
    ];

     /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'author' => $this->getAuthor(),
        ];
    }

    /**
     * Returns the guest author custom field value as the author if it has been set
     */
    public function getAuthor()
    {
        $guest_author = get_field('guest_author');
        $original_author = get_the_author();

        if ( $guest_author ) {
            return $guest_author;
        } else {
            return $original_author;
        }
    }
}
