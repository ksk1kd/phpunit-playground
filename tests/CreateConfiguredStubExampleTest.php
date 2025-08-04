<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\FooBarInterface;

final class CreateConfiguredStubExampleTest extends TestCase
{
    public function testCreateConfiguredStub(): void
    {
        $o = $this->createConfiguredStub(
            FooBarInterface::class,
            [
                'doFoo' => 'foo',
                'doBar' => 'bar',
            ],
        );

        $this->assertSame('foo', $o->doFoo());

        $this->assertSame('bar', $o->doBar());
    }
}