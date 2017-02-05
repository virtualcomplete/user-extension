<?php
namespace VirtualComplete\UserExtension;

use Illuminate\Database\Eloquent\Model;

class UserPhone extends Model
{
    protected $table = 'user_phones';
    protected $guarded = ['id', 'user_id'];

    /**
     * Prepare the number for the database
     *   1.  Strip excess characters (ex. hyphens and parentheses) from number
     *   2.  Extract the extension (looks for an 'x')
     *
     * @param $number
     */
    public function setNumberAttribute($number)
    {
        $number = preg_replace('/[^+\dx]/i', '', $number);

        $extensionPosition = stripos($number, 'x');
        if ($extensionPosition >= 6) {
            $this->attributes['extension'] = substr($number, $extensionPosition + 1);
            $number = substr($number, 0, $extensionPosition);
        }

        $this->attributes['number'] = $number;
    }

}
