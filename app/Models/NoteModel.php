<?php 

namespace App\Models;

use CodeIgniter\Model;

class NoteModel extends Model{
    protected $table            = 'note';
    protected $primaryKey       = 'note_id';
    protected $useAutoIncrement = true;
	protected $returnType       = 'array';
    protected $allowedFields    = [
                                'note_id'           , 
                                'username'          , 
                                'note_title'        , 
                                'note_content'      ,
                                'note_registerDate' ,                           
                                'note_updateDate'   ,                        
                                'ishide'                           
                            ];
}