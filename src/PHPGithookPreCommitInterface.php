<?php

declare(strict_types=1);

namespace PHPGithook\ModuleInterface;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

interface PHPGithookPreCommitInterface
{
    /**
     * This hook is called before obtaining the proposed commit message.
     *
     * Returning false will abort the commit.
     *
     * It is used to check the commit itself (rather than the message).
     */
    public function preCommit(InputInterface $input, OutputInterface $output, ConfigurationBag $configuration): bool;
}
