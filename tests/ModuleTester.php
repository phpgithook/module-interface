<?php


namespace PHPGithook\ModuleInterface\Tests;


use PHPUnit\Framework\TestCase;

abstract class ModuleTester extends TestCase
{

    /**
     * Return the directory to your module
     */
    abstract protected function directoryToModule(): string;

    /**
     * @test
     */
    public function have_setup_file(): void
    {
    }

    /**
     * @test
     */
    public function have_commit_msg_file(): void
    {
    }

    /**
     * @test
     */
    public function have_post_commit_file(): void
    {
    }

    /**
     * @test
     */
    public function have_pre_commit_file(): void
    {
    }

    /**
     * @test
     */
    public function have_prepare_commit_file(): void
    {
    }

    /**
     * @test
     */
    public function have_pre_push_file(): void
    {
    }

}
