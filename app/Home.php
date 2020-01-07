<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tlp_nav', 'open_nav', 'logo_nav','img_slider','title_slider','text_since','img_since','title_since','description_since','logo_footer','address_footer'
    ];

}
