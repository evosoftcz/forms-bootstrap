<?php declare(strict_types = 1);

namespace Contributte\FormsBootstrap\Inputs;

use Contributte\FormsBootstrap\BootstrapForm;
use Contributte\FormsBootstrap\Enums\BootstrapVersion;
use Contributte\FormsBootstrap\Traits\ChoiceInputTrait;
use Contributte\FormsBootstrap\Traits\InputPromptTrait;
use Contributte\FormsBootstrap\Traits\StandardValidationTrait;
use Nette\Forms\Controls\SelectBox;
use Nette\Utils\Html;
use Selectize\Form\Control\Selectize;

/**
 * Class SelectInput.
 * Single select.
 */
class SelectizeInput extends Selectize
{
//	use ChoiceInputTrait;
//	use InputPromptTrait;
	use StandardValidationTrait;
}
