<?php
namespace VirtualComplete\UserExtension;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

interface ParentUserInterface
{
    /**
     * Return the User model of the parent user or null if no parent exists
     *
     * @return $this|BelongsTo|null
     */
    public function parent();
}
