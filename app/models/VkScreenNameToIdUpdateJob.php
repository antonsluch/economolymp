<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VkScreenNameToIdUpdateJob extends Model {
	protected $table = 'vk_screen_name_to_id_update_jobs';

	public function customer()
	{
		return $this->belongsTo('App\Models\Customer');
	}
}
