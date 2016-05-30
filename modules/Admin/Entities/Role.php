<?php namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $fillable = ['name', 'description'];

    public function admins()
    {
      return $this->belongsToMany(Modules\Admin\Entities\Admin::class, 'admin_role', 'admin_id', 'role_id');
    }

}
