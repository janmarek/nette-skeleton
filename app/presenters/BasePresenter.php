<?php

abstract class BasePresenter extends \Nette\Application\UI\Presenter
{

	public function formatLayoutTemplateFiles()
	{
		return array(
			dirname($this->getReflection()->getFileName()) . '/layout.latte',
			$this->context->parameters['appDir'] . '/presenters/layout.latte',
		);
	}

	public function formatTemplateFiles()
	{
		return array(
			dirname($this->getReflection()->getFileName()) . '/' . $this->getView() . '.latte',
		);
	}

	public function createComponentCss()
	{
		return new \WebLoader\Nette\CssLoader(
			$this->context->webloader->cssDefaultCompiler,
			$this->template->basePath . '/webtemp'
		);
	}

	public function createComponentJs()
	{
		return new \WebLoader\Nette\JavaScriptLoader(
			$this->context->webloader->jsDefaultCompiler,
			$this->template->basePath . '/webtemp'
		);
	}

}
