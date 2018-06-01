<?php
namespace Application\Service;

use Zend\Log\Logger;
use Zend\Log\Writer\Db;
use Application\Log\Formatter\SqlsrvDb;
use Zend\Db\Adapter\Adapter;
use Doctrine\ORM\EntityManager;

class LogHandlingService
{
    /**
     *
     * @var Logger
     */
    protected $logger;
    
    protected $config;
    
    function __construct($config)
    {
        $this->config = $config;
        
        $dbconfig = array(
            'hostname'  => $config['api-logger']['hostname'],
            'port'      => $config['api-logger']['port'],
            'driver'    => $config['api-logger']['driver'],
            'database'  => $config['api-logger']['database'],
            'username'  => $config['api-logger']['username'],
            'password'  => $config['api-logger']['password'],
        );
        $db = new Adapter($dbconfig);
        
        $mapping = array(
            'timestamp'     => 'date',
            'priority'      => 'type',
            'message'       => 'event',
            'priorityName'  => 'error_type',
            'extra' => array(
                'url' => 'url',
                'trace' => 'trace',
            ),
        );
        
        $formatter = new SqlsrvDb();
        $writer = new Db($db, 'EEK_API_LOG', $mapping);
        $writer->setFormatter($formatter);
        
        $logger = new Logger();
        $logger->addWriter($writer);
        
        $this->logger = $logger;
    }
    
    /**
     * 
     * @param string $message
     * @param int $type
     * @param array $extra
     * @param EntityManager $em
     */
    function log($message, $type = Logger::INFO, $extra = array(), $em)
    {
        // First check if url is available in EEK_API_URL table
        $qb = $em->createQueryBuilder();
        $qb->select('o')->from('Application\Entity\Url', 'o');
        $qb->andWhere('o.address = :address')->setParameter('address', $extra['url']);
        $query = $qb->getQuery();
        
        $items = $query->getResult();
        
        if (count($items) > 0) {
        
            $log = $this->config['api-logger']['servicename'] . ": " . $message;
            
            switch ($type) {
                case Logger::ERR:
                    $this->logger->err($log, $extra);
                    break;
                case Logger::WARN:
                    $this->logger->warn($log, $extra);
                    break;
                default:
                    $this->logger->info($log, $extra);
                    break;
            }
        }
    }
}

