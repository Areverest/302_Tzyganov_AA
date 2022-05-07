<?php

namespace lexa\Tests;
use \PHPUnit\Framework\TestCase;
use lexa\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Цыганов Алексей Алексеевич...', $truncater->truncate('Цыганов Алексей Алексеевич'));
        $this->assertSame('Цыганов Алек...', $truncater->truncate('Цыганов Алексей Алексеевич', ['length' => 10]));
        $this->assertSame('Цыганов Алексей Алексеевич...', $truncater->truncate('Цыганов Алексей Алексеевич', ['length' => 50]));
        $this->assertSame('Цыганов Алексей Алексеевич...', $truncater->truncate('Цыганов Алексей Алексеевич', ['length' => -10]));
        $this->assertSame('Цыганов Алек*', $truncater->truncate('Цыганов Алексей Алексеевич', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Цыганов Алексей Алексеевич*', $truncater->truncate('Цыганов Алексей Алексеевич', ['separator' => '*']));
    }
}
