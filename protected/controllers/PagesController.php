<?php

class PagesController extends Controller
{

  public $page = '';
  public $pages = '';

  public $layout='//layouts/main';

    public function filters()
    {
      return [
        'loadPage + index show',
        'loadPages + index show'
      ];
    }

	public function actionIndex()
	{
    $this->actionShow();
	}

	public function actionShow()
	{
    $this->render("patterns/{$this->page->pattern}", ['page' => $this->page]);
	}

  public function filterLoadPage(CFilterChain $chain )
  {
    $this->page = Page::model()->getPage(@$_GET['pageSlug']);
    $chain->run();
  }

  public function filterLoadPages(CFilterChain $chain )
  {
    $this->pages = Page::model()->findAll(['select' => 'id, menu_header, slug']);
    $chain->run();
  }
}
