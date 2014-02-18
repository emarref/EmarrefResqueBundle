<?php

namespace Emarref\Bundle\ResqueBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Console\Application;
use Resque\Commands as ResqueCommand;

class EmarrefResqueBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function registerCommands(Application $application)
    {
        parent::registerCommands($application);

        $application->add(new ResqueCommand\Clear);
        $application->add(new ResqueCommand\Hosts);
        $application->add(new ResqueCommand\Queues);
        $application->add(new ResqueCommand\Cleanup);
        $application->add(new ResqueCommand\Workers);

        $application->add(new ResqueCommand\Job\Queue);

        $application->add(new ResqueCommand\Socket\Send);
        $application->add(new ResqueCommand\Socket\Receive);
        $application->add(new ResqueCommand\Socket\Connect);

        $application->add(new ResqueCommand\Worker\Start);
        $application->add(new ResqueCommand\Worker\Stop);
        $application->add(new ResqueCommand\Worker\Restart);
        $application->add(new ResqueCommand\Worker\Pause);
        $application->add(new ResqueCommand\Worker\Resume);
        $application->add(new ResqueCommand\Worker\Cancel);

        $application->add(new ResqueCommand\SpeedTest);
    }
}
