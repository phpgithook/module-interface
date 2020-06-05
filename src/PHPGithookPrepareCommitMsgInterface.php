<?php

declare(strict_types=1);

namespace PHPGithook\ModuleInterface;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

interface PHPGithookPrepareCommitMsgInterface
{
    /**
     * Called after receiving the default commit message, just prior to firing up the commit message editor.
     *
     * Returning false aborts the commit.
     *
     * This is used to edit the message in a way that cannot be suppressed.
     */
    public function prepareCommitMsg(string &$commitMessage, InputInterface $input, OutputInterface $output, ConfigurationBag $configuration, ?string $type = null, ?string $sha = null): bool;
}
