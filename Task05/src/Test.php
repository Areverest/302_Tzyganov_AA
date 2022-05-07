<?php

namespace lexa\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Цыганов Алексей Алексеевич') . PHP_EOL;
    echo $truncater->truncate('Цыганов Алексей Алексеевич', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Цыганов Алексей Алексеевич', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Цыганов Алексей Алексеевич', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Цыганов Алексей Алексеевич', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Цыганов Алексей Алексеевич', ['separator' => '*']) . PHP_EOL;
}
