<?php
namespace VirtualComplete\UserExtension;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ParentUserTrait
 * @package VirtualComplete\UserExtension
 * 
 * @property int $parent_id
 */
trait ParentUserTrait
{
    /**
     * @return $this|BelongsTo|null
     */
    public function parent() {
        return $this->belongsTo(static::class, 'parent_id');
    }
}
