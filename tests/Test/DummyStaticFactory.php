<?php

/*
 * This file is part of the LaravelYaml package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fidry\LaravelYaml\Test;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class DummyStaticFactory
{
    /**
     * @param array ...$args
     *
     * @return AnotherDummy
     */
    public static function create(...$args)
    {
        return new AnotherDummy(...$args);
    }
}
