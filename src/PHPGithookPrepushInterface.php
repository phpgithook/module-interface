<?php

declare(strict_types=1);

namespace PHPGithook\ModuleInterface;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

interface PHPGithookPrepushInterface
{
    /**
     * Called prior to a push to a remote.
     * Returning false aborts the push.
     */
    public function prePush(string $destinationName, string $destinationLocation, InputInterface $input, OutputInterface $output, ConfigurationBag $configuration): bool;
}
