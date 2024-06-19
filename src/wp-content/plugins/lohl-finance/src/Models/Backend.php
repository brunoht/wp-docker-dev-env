<?php

namespace Lohl\Finance\Models;

use Lohl\Finance\Providers\Template;

class Backend
{
	protected $title = "Untitled";

	protected $slug = "no-slug";

	protected $menuTitle = "Untitled";

	protected $capability = "manage_options";

	protected $icon = "dashicons-admin-generic";

	protected $position = 2;

	protected $view;

	protected $params = [];

	private $template;

	public function __construct()
	{
		$this->template = Template::use();

		add_action('admin_menu', [$this, 'run']);
	}

	protected function handle() {}

	protected function setParam($key, $value)
	{
		$this->params[$key] = $value;
	}

	protected function addParams(array $params)
	{
		$this->params = array_merge($this->params, $params);
	}

	public function run()
	{
		$this->setParam("title", $this->title);

		$this->handle();

		add_menu_page(
			$this->title,
			$this->menuTitle,
			$this->capability,
			$this->slug,
			[$this, 'printView'],
			$this->icon,
			$this->position
		);
	}

	protected function view()
	{
		return $this->template->backend($this->view ?? $this->slug, $this->params);
	}

	public function printView()
	{
		echo $this->view();
	}
}