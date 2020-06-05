<?php

declare(strict_types=1);

namespace PHPGithook\ModuleInterface;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

interface PHPGithookSetupInterface
{
    /**
     * The name that will be displayed to the user, when using modify/enable/disable module.
     */
    public function getVisualName(): string;

    /**
     * Description of what your module does.
     */
    public function getDescription(): string;

    /**
     * The name to the configuration.
     */
    public function getModuleName(): string;

    /**
     * The version of the module.
     */
    public function getVersion(): string;

    /**
     * The configuration to the module
     * This configuration will be parsed to each of the hooks.
     * You can ask the user for configuration options or just set the configuration.
     */
    public function createConfiguration(InputInterface $input, OutputInterface $output, ConfigurationBag $configuration): void;

    /**
     * Array of classes which should be loaded that contains your git hooks.
     */
    public function classes(): array;
}
