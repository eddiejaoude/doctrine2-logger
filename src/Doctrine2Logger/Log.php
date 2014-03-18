<?php
namespace EddieJaoude\Doctrine2Logger;

use Doctrine\DBAL\Logging\DebugStack;
use Zend\Log\Logger;

class Log extends DebugStack
{

    /**
     * @var Logger
     */
    private $logger;

    /**
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function stopQuery()
    {
        if ($this->enabled) {
            parent::stopQuery();

            $q       = $this->queries[$this->currentQuery];
            $message = "Executed Query:  " . print_r($q, true);
            $this->logger->info($message);
        }
    }
}