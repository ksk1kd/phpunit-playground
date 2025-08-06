<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\FooBarInterface;

final class CreateConfiguredMockExampleTest extends TestCase
{
    public function testCreateConfiguredMock(): void
    {
        $o = $this->createConfiguredMock(
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