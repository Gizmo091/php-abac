<?php

namespace PhpAbac\Loader;

class PHPAbacLoader extends AbacLoader
{
	protected static $_EXTENSION_ALLOWED_A = ['php'];
	
    public function load($resource, $type = null)
    {
    	return (include ($resource)) + ['path' => $resource];
    }

    public function supports($resource, $type = null)
    {
        return is_string($resource) && self::supportsExtension($resource);
    }
}