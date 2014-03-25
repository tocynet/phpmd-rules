<?php

require_once 'PHP/PMD/AbstractRule.php';
require_once 'PHP/PMD/Rule/IMethodAware.php';

class Jp_Co_Superappli_Rules_NoFunctions
	extends PHP_PMD_AbstractRule
	implements PHP_PMD_Rule_IMethodAware
{
	public function apply(PHP_PMD_AbstractNode $node)
	{
		// $this->addViolation($node);
		printf("name: %s->%s\n", $node->getParentName(),$node->getName());
	}
}

?>
