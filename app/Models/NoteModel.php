<?php 

namespace App\Models;

use CodeIgniter\Model;

class NoteModel extends Model{
    protected $table            = 'note';
    protected $primaryKey       = 'note_id';
    protected $useAutoIncrement = true;
	protected $returnType       = 'array';
    protected $allowedFields    = [
                                'id'           , 
                                'username'     , 
                                'title'        , 
                                'content'      ,
                                'registerDate' ,                           
                                'updateDate'                           
                            ];
}