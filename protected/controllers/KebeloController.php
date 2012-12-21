<?php

class KebeloController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/main.
	 */
	public $layout='//layouts/main';

	/**
	 * Show index page
	 */
	public function actionIndex()
	{
		$this->render('index');
	}
	
	/**
	 * Show advantage page
	 */
	public function actionAdvantage()
	{
		$this->render('advantage');
	}

	/**
	 * Show silk page
	 */
	public function actionSilk()
	{
		$this->render('silk');
	}
	
	/**
	 * Show Q&A page
	 */
	public function actionQuestions()
	{
		$this->render('questions');
	}
	
}