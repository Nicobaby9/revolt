<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    protected $fillable = [
        'company_profile',
        'atOurServices_first_title',
        'atOurServices_first_desc',
        'atOurServices_second_title',
        'atOurServices_second_desc',
        'atOurServices_third_title',
        'atOurServices_third_desc',
        'atOurServices_fourth_title',
        'atOurServices_fourth_desc',
        'contact_us_wa_link',
        'contact_us_instagram_link'
    ];
}
