<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes) {
	$routes->add('home','/')
		-> controller(["MyCode\Home","helloWorld"]);
	$routes->add('produto','/produto')
		-> controller(["MyCode\Produto","listarProduto"]);
	$routes->add('sobre','/sobre')
	->controller(['MyCode\Sobre','getSobre']);
};
};
