<?php
namespace Pantheon\TerminusBuildTools\Task\Repository;

use Robo\Task\BaseTask;
use Pantheon\TerminusBuildTools\ServiceProviders\RepositoryProviders\GitProvider;

abstract class Base extends BaseTask
{
    /** var GitProvider */
    protected $provider;

    public function provider(CIProvider $provider)
    {
        $this->provider = $provider;
    }
}
