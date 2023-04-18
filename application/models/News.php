<?php

namespace application\models;

use application\core\Model;
class  News extends Model
{
    public $limit = 5;
    public function getNews($route)
    {
        $limit = $this->limit;
        $params = [
            'start' => (($route['page'] ?? 1)-1)*$limit,
            'limit' => $limit,
        ];
        return $this->db->row('SELECT * FROM news ORDER BY id DESC LIMIT :start, :limit',$params);
    }
    public function getPagesCount()
    {
        return $this->db->column('SELECT COUNT(id) FROM news');
    }
    public function getSingleNews()
    {
        $page = $_SERVER['REQUEST_URI'];
        $id =preg_replace("/[^0-9]/", '', $page);
        return $this->db->row('SELECT * FROM news WHERE id ='.$id);
    }
}
