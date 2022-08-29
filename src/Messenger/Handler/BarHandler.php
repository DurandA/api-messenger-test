<?php

namespace App\Messenger\Handler;

use App\Entity\Bar;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class BarHandler implements MessageHandlerInterface
{
    public function __construct(
        private LoggerInterface $logger
    ) {
    }

    public function __invoke(Bar $bar)
    {
        $this->logger->info("Bar handler called");
    }
}