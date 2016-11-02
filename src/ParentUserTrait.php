<?php
namespace VirtualComplete\UserExtension;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ParentUserTrait
 * @package VirtualComplete\UserExtension
 * 
 * @property int $parent_id
 */
class ParentUserTrait extends \Eloquent
{
    /**
     * @return $this|BelongsTo|null
     */
    public function parent() {
        return $this->belongsTo(static::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|$this[]
     */
    public function children() {
        return $this->hasMany(static::class, 'parent_id');
    }
}
