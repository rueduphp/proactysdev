<?php
/**
 * @return bool
 */
function isProd(): bool
{
    return env('APP_ENV') === 'production';
}

/**
 * @param null|string $namespace
 * @return \App\Models\Cache
 */
function store(?string $namespace = null)
{
    $store = new \App\Models\Cache;

    if (null !== $namespace) {
        return $store->setNamespace($namespace);
    }

    return $store;
}

function create($class, $count = null, $attributes = [])
{
    return customFactory($class, $count, $attributes, 'create');
}

function make($class, $count = null, $attributes = [])
{
    return customFactory($class, $count, $attributes, 'make');
}

function raw($class, $count = null, $attributes = [])
{
    return customFactory($class, $count, $attributes, 'raw');
}

function customFactory($class, $count, $attributes, $method)
{
    if (is_array($count)) {
        $attributes = $count;
        $count = null;
    }

    return factory($class, $count)->{$method}($attributes);
}

