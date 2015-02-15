<?php

namespace App\FrontModule\Presenters;

use Nette,
	App\Model;


/**
 * Homepage presenter.
 */
class PostsPresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

}
