<?php

$container = $app->getContainer();

$container['twig'] = function ($container) {

    $twig = new \Slim\Views\Twig( './views' );

    $twig->addExtension(  new Slim\Views\TwigExtension(
            $container['router'],
            $container['request']->getUri()->getBasePath(),
            '/'
        )
    );

    # Habilita a utilização da session na view
    $twig->getEnvironment()->addGlobal("session",  $_SESSION);

    #
    $twig->addExtension(new Twig_Extension_Debug());

    return $twig;
};

# $app->twigEnvironment
$container['twigEnvironment'] = function ($container) {
    return $container['twig']->getEnvironment();
};