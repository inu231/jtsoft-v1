<?php namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class IssueComment extends Model {

    protected $fillable = ['description', 'admin_id', 'issue_id'];

    protected $table = 'issue_comments';

    /**
     * Relationship with admins
     *
     * @var array
     */
     public function admin()
     {
       return $this->belongsTo(Admin::class);
     }

     /**
      * Relationship with Issues
      *
      * @var array
      */
      public function issue()
      {
        return $this->belongsTo(Issue::class);
      }

}
