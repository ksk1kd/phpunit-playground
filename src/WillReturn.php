<?php declare(strict_types=1);

final class WillReturn
{
    public function doSomething(WillReturnDependencyInterface $dependency): string
    {
        $value = $dependency->doSomething();
        return "Result: " . $value;
    }
}
