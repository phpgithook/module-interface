<?php

declare(strict_types=1);

namespace PHPGithook\ModuleInterface\Tests;

use PHPGithook\ModuleInterface\ConfigurationBag;
use PHPUnit\Framework\TestCase;

class ConfigurationBagTest extends TestCase
{
    /**
     * @test
     */
    public function bag(): void
    {
        $bag = new ConfigurationBag(['foo' => 'bar']);
        $bag->set('string', 'string');
        self::assertSame('string', $bag->get('string'));
        self::assertCount(2, $bag->all());
        self::assertSame('string', $bag->keys()[1]);
        $bag->replace(['string' => 'newstring']);
        self::assertSame('newstring', $bag->get('string'));
        $bag->add(['foo' => 'baz']);
        self::assertSame('baz', $bag->get('foo'));
        $bag->remove('string');
        $bag->remove('foo');
        self::assertFalse($bag->has('string'));
        self::assertCount(0, $bag);
        self::assertIsIterable($bag->getIterator());
    }

    /**
     * @test
     */
    public function types(): void
    {
        $bag = new ConfigurationBag([
            'alpha' => 'string',
            'digits' => '12-12',
            'int' => 12,
            'bool' => false,
            'alnum' => false,
        ]);

        self::assertSame('string', $bag->getAlpha('alpha'));
        self::assertSame('1212', $bag->getDigits('digits'));
        self::assertSame(12, $bag->getInt('int'));
        self::assertFalse($bag->getBoolean('bool'));
        self::assertSame('', $bag->getAlnum('alnum'));
    }
}
