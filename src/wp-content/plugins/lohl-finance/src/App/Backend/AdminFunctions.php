<?php

namespace Lohl\Finance\App\Backend;

use Lohl\Finance\Models\Backend;

class AdminFunctions extends Backend
{
	protected $title = "Lohl Finance";

	protected $slug = 'lohl-finance';

	protected $menuTitle = "Lohl Finance";

	protected $icon = "dashicons-calculator";

	protected function handle() {
		$this->addParams([
			"slug" => $this->slug,
			"description" => "Painel de controle financeiro para gestão de cobranças.",
		]);
	}
}