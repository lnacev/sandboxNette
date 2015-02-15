<?php

namespace App\AdminModule\Presenters;

use Nette,
	App\Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
        public function userLogged()
{
    if (!$this->getUser()->isLoggedIn()) {
        $this->redirect('Sign:in');
    }
}

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}
        

}
