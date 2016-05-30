<?php namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model {

    /*************************
      *   Status:
      *     0 - Aberto
      *     1 - Pendente
      *     2 - Fechado
      *
      *   Relevance:
      *     0 - Normal
      *     1 - Alta
      *     2 - Urgente
      *
      ***********************/

    protected $fillable = ['title', 'description', 'status', 'relevance'];


    public function getStatusList()
    {
      return  $status = [
            '0' => 'Aberto',
            '1' => 'Pendente',
            '2' => 'Fechado'
      ];
    }

    public function getRelevanceList()
    {
      return  $relevance = [
            '0' => 'Normal',
            '1' => 'Alta',
            '2' => 'Urgente'
      ];
    }

    public function admins()
    {
        return $this->belongsTo(Admin::class);
    }


}
