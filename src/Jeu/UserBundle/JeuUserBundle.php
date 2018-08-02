<?php

namespace Jeu\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JeuUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
