<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class WillReturnTest extends TestCase
{
    public function testDoSomething(): void
    {
        $wr = new WillReturn;

        $dependency = $this->createStub(WillReturnDependencyInterface::class);

        $dependency->method('doSomething')->willReturn('foo');

        $result = $wr->doSomething($dependency);

        $this->assertStringEndsWith('foo', $result);
    }
}
