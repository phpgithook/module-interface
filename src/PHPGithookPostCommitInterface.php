<?php

declare(strict_types=1);

namespace PHPGithook\ModuleInterface;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

interface PHPGithookPostCommitInterface
{
    /**
     * Called after the actual commit is made. Because of this, it cannot disrupt the commit.
     * It is mainly used to allow notifications.
     */
    public function postCommit(InputInterface $input, OutputInterface $output, ConfigurationBag $configuration): void;
}
