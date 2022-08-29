<?php

namespace Sandbox\Basics;

trait BaseTrait
{
    public function getTraitName(): string
    {
        return __TRAIT__;
    }
}

class BaseClass
{
    use BaseTrait;

    public function getClassName(): string
    {
        return __CLASS__;
    }

    public function getFunctionName(): string
    {
        return __FUNCTION__;
    }

    public function getMethodName(): string
    {
        return __METHOD__;
    }
}

$base_class = new BaseClass;

?>

<h1>Constants</h1>

<hr>

<section>
    <h2>Predefined Constants</h2>
    <pre>PHP_VERSION : <?= PHP_VERSION ?></pre>
    <pre>PHP_MAJOR_VERSION : <?= PHP_MAJOR_VERSION ?></pre>
    <pre>PHP_MINOR_VERSION : <?= PHP_MINOR_VERSION ?></pre>
    <pre>PHP_RELEASE_VERSION : <?= PHP_RELEASE_VERSION ?></pre>
    <pre>PHP_VERSION_ID : <?= PHP_VERSION_ID ?></pre>
    <pre>PHP_ZTS : <?= PHP_ZTS ?></pre>
    <pre>PHP_DEBUG : <?= PHP_DEBUG ?></pre>
    <pre>PHP_MAXPATHLEN : <?= PHP_MAXPATHLEN ?></pre>
    <pre>PHP_OS : <?= PHP_OS ?></pre>
    <pre>PHP_OS_FAMILY : <?= PHP_OS_FAMILY ?></pre>
    <pre>PHP_SAPI : <?= PHP_SAPI ?></pre>
    <pre>PHP_INT_MAX : <?= PHP_INT_MAX ?></pre>
    <pre>PHP_INT_MIN : <?= PHP_INT_MIN ?></pre>
    <pre>PHP_FLOAT_EPSILON : <?= PHP_FLOAT_EPSILON ?></pre>
    <pre>PHP_FLOAT_MIN : <?= PHP_FLOAT_MIN ?></pre>
    <pre>PHP_FLOAT_MAX : <?= PHP_FLOAT_MAX ?></pre>
    <pre>DEFAULT_INCLUDE_PATH : <?= DEFAULT_INCLUDE_PATH ?></pre>
    <pre>PEAR_INSTALL_DIR : <?= PEAR_INSTALL_DIR ?></pre>
    <pre>PEAR_EXTENSION_DIR : <?= PEAR_EXTENSION_DIR ?></pre>
    <pre>PHP_EXTENSION_DIR : <?= PHP_EXTENSION_DIR ?></pre>
    <pre>PHP_PREFIX : <?= PHP_PREFIX ?></pre>
    <pre>PHP_BINDIR : <?= PHP_BINDIR ?></pre>
    <pre>PHP_BINARY : <?= PHP_BINARY ?></pre>
    <pre>PHP_LIBDIR : <?= PHP_LIBDIR ?></pre>
    <pre>PHP_DATADIR : <?= PHP_DATADIR ?></pre>
    <pre>PHP_SYSCONFDIR : <?= PHP_SYSCONFDIR ?></pre>
    <pre>PHP_LOCALSTATEDIR : <?= PHP_LOCALSTATEDIR ?></pre>
    <pre>PHP_SHLIB_SUFFIX : <?= PHP_SHLIB_SUFFIX ?></pre>
    <pre>PHP_FD_SETSIZE : <?= PHP_FD_SETSIZE ?></pre>
    <pre>PHP_BINARY : <?= PHP_BINARY ?></pre>
    <pre>PHP_BINARY : <?= PHP_BINARY ?></pre>
</section>

<hr>

<section>
    <h2>Magic Constants</h2>
    <pre>__LINE__ : <?= __LINE__ ?></pre>
    <pre>__FILE__ : <?= __FILE__ ?></pre>
    <pre>__DIR__ : <?= __DIR__ ?></pre>
    <pre>__FUNCTION__ : <?= $base_class->getFunctionName() ?></pre>
    <pre>__CLASS__ : <?= $base_class->getClassName() ?></pre>
    <pre>__TRAIT__ : <?= $base_class->getTraitName() ?></pre>
    <pre>__METHOD__ : <?= $base_class->getMethodName() ?></pre>
    <pre>__NAMESPACE__ : <?= __NAMESPACE__ ?></pre>
</section>
