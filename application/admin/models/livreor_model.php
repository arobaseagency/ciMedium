<?php

class Livreor_model extends CI_Model
{
    
    private $table = 'livreor_commentaires';
    
    
    public function ajouter_commentaire($pseudo, $message)
    {
        if(!is_string($pseudo) || !is_string($message) || empty($pseudo) || empty($message))
        {
            return false;
        }
        
        return $this->db->set(array('pseudo' => $pseudo,
                                    'message' => $message)
                              )
                        ->set('date', 'NOW()', false)
                        ->insert($this->table);
    }
    
    public function count()
    {
        $output = $this->db->count_all($this->table);
        
        return $output;
    }
    
    public function get_commentaires($nb, $debut = 0)
    {
        if(!is_integer($nb) || $nb < 1 || !is_integer($debut) || $debut < 0)
        {
            return false;
        }
        
        $output = $this->db->select('id, pseudo, message, date')
                            ->from($this->table)
                            ->order_by('id', 'desc')
                            ->limit($nb, $debut)
                            ->get()
                            ->result();
                        
        return $output;
    }
    
}