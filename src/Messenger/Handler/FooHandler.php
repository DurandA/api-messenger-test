<?php

namespace App\Messenger\Handler;

use App\Entity\Foo;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class FooHandler implements MessageHandlerInterface
{
    public function __construct(
        private LoggerInterface $logger
    ) {
    }

    public function __invoke(Foo $foo)
    {
        $this->logger->info("Foo handler called");
    }
}