<?php

namespace ContainerYNZ0lUn;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder70743 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer48985 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties01fe8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getConnection', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getMetadataFactory', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getExpressionBuilder', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'beginTransaction', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getCache', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getCache();
    }

    public function transactional($func)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'transactional', array('func' => $func), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'wrapInTransaction', array('func' => $func), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'commit', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->commit();
    }

    public function rollback()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'rollback', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getClassMetadata', array('className' => $className), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'createQuery', array('dql' => $dql), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'createNamedQuery', array('name' => $name), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'createQueryBuilder', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'flush', array('entity' => $entity), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'clear', array('entityName' => $entityName), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->clear($entityName);
    }

    public function close()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'close', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->close();
    }

    public function persist($entity)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'persist', array('entity' => $entity), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'remove', array('entity' => $entity), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'refresh', array('entity' => $entity), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'detach', array('entity' => $entity), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'merge', array('entity' => $entity), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getRepository', array('entityName' => $entityName), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'contains', array('entity' => $entity), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getEventManager', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getConfiguration', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'isOpen', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getUnitOfWork', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getProxyFactory', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'initializeObject', array('obj' => $obj), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'getFilters', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'isFiltersStateClean', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'hasFilters', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return $this->valueHolder70743->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer48985 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder70743) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder70743 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder70743->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, '__get', ['name' => $name], $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        if (isset(self::$publicProperties01fe8[$name])) {
            return $this->valueHolder70743->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70743;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder70743;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70743;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder70743;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, '__isset', array('name' => $name), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70743;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder70743;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, '__unset', array('name' => $name), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70743;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder70743;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, '__clone', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        $this->valueHolder70743 = clone $this->valueHolder70743;
    }

    public function __sleep()
    {
        $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, '__sleep', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;

        return array('valueHolder70743');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer48985 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer48985;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer48985 && ($this->initializer48985->__invoke($valueHolder70743, $this, 'initializeProxy', array(), $this->initializer48985) || 1) && $this->valueHolder70743 = $valueHolder70743;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder70743;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder70743;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
