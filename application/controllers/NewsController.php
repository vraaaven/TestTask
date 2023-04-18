<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;
use application\lib\Pagination;

class NewsController extends Controller
{
    public function showAction(){
        $pagesNum = $this->model->getPagesCount();
        $pagination = new Pagination($this->route,$pagesNum);
        $vars = [
            'pagination' => $pagination->get(),
            'news' => $this->model->getNews($this->route),
        ];
        $this->view->render('Новости',$vars);
    }
    public function viewAction()
    {
        $news = $this->model->getSingleNews();
        $vars = [
            'news' => $news
        ];

        $this->view->render($news[0]['title'],$vars);
    }
}