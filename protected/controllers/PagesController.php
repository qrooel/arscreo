<?php

class PagesController extends Controller
{

  public $layout='//layouts/main';

	public function actionIndex()
	{
    $this->actionShow();
	}

	public function actionShow()
	{
		$this->render('show');
	}
}
