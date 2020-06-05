<?php

declare(strict_types=1);

namespace PHPGithook\ModuleInterface;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

interface PHPGithookCommitMsgInterface
{
    /**
     * This hook is invoked by git commit and git merge, and can be bypassed with the --no-verify option.
     *
     * Exiting with a false causes the command to abort.
     *
     * The hook is allowed to edit the message file in place, and can be used to normalize the message into some
     * project standard format. It can also be used to refuse the commit after inspecting the message file.
     *
     * @param string $commitMessage The commit message
     */
    public function commitMsg(string &$commitMessage, InputInterface $input, OutputInterface $output, ConfigurationBag $configuration): bool;
}
