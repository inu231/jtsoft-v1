<?php namespace Modules\Admin\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;

class Admin extends Authenticatable {

  use Sortable;
  protected $table = 'admins';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $sortable = [
      'name', 'email', 'created_at',
   ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'password',
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

  /**
   * Relationship with roles
   *
   * @var array
   */
  public function roles()
  {
      return $this->belongsToMany(Role::class, 'admin_role', 'admin_id', 'role_id')->withTimestamps();
  }

  /**
   * Relationship with roles
   *
   * @var array
   */
   public function issues()
   {
     return $this->hasMany(Issue::class);
   }

   /**
    * Relationship with issue_comments
    *
    * @var array
    */
    public function issueComments()
    {
      return $this->hasMany(IssueComment::class);
    }



  public function hasAnyRole($roles)
  {
      if (is_array($roles))
      {
          foreach($roles as $role)
          {
              if ($this->hasRole($role))
              {
                  return true;
              }
          }
      }
      else
      {
          if($this->hasRole($roles))
          {
              return true;
          }
      }

      return false;
  }

  public function hasRole($role)
  {
      if($this->roles()->where('name', $role)->first())
      {
          return true;
      }

      return false;
  }

  public function isAdmin()
  {
      $roles = $this->roles()->lists('name')->toArray();

      foreach ($roles as $role) {
         if($role == 'Administrador') {
            return true;
         }
      }

      return false;
  }


}
