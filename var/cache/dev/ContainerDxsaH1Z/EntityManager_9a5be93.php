<?php

namespace ContainerDxsaH1Z;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder67884 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer50002 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties99fb9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getConnection', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getMetadataFactory', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getExpressionBuilder', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'beginTransaction', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getCache', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getCache();
    }

    public function transactional($func)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'transactional', array('func' => $func), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'wrapInTransaction', array('func' => $func), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'commit', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->commit();
    }

    public function rollback()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'rollback', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getClassMetadata', array('className' => $className), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'createQuery', array('dql' => $dql), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'createNamedQuery', array('name' => $name), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'createQueryBuilder', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'flush', array('entity' => $entity), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'clear', array('entityName' => $entityName), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->clear($entityName);
    }

    public function close()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'close', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->close();
    }

    public function persist($entity)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'persist', array('entity' => $entity), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'remove', array('entity' => $entity), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'refresh', array('entity' => $entity), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'detach', array('entity' => $entity), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'merge', array('entity' => $entity), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getRepository', array('entityName' => $entityName), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'contains', array('entity' => $entity), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getEventManager', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getConfiguration', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'isOpen', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getUnitOfWork', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getProxyFactory', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'initializeObject', array('obj' => $obj), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'getFilters', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'isFiltersStateClean', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'hasFilters', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return $this->valueHolder67884->hasFilters();
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

        $instance->initializer50002 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder67884) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder67884 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder67884->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, '__get', ['name' => $name], $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        if (isset(self::$publicProperties99fb9[$name])) {
            return $this->valueHolder67884->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67884;

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

        $targetObject = $this->valueHolder67884;
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
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67884;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder67884;
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
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, '__isset', array('name' => $name), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67884;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder67884;
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
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, '__unset', array('name' => $name), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67884;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder67884;
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
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, '__clone', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        $this->valueHolder67884 = clone $this->valueHolder67884;
    }

    public function __sleep()
    {
        $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, '__sleep', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;

        return array('valueHolder67884');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer50002 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer50002;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer50002 && ($this->initializer50002->__invoke($valueHolder67884, $this, 'initializeProxy', array(), $this->initializer50002) || 1) && $this->valueHolder67884 = $valueHolder67884;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder67884;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67884;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
