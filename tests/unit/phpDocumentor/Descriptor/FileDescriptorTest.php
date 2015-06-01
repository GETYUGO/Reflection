<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @copyright 2010-2013 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Descriptor;

use \Mockery as m;

/**
 * Tests the functionality for the FileDescriptor class.
 */
class FileDescriptorTest extends \PHPUnit_Framework_TestCase
{
    const EXAMPLE_HASH   = 'a-hash-string';
    const EXAMPLE_PATH   = 'a-path-string';
    const EXAMPLE_SOURCE = 'a-source-string';

    /** @var FileDescriptor $fixture */
    protected $fixture;

    /**
     * Creates a new (empty) fixture object.
     */
    protected function setUp()
    {
        $this->fixture = new FileDescriptor(self::EXAMPLE_HASH);
    }

    /**
     * Tests whether all collection objects and hash are properly initialized
     *
     * @covers phpDocumentor\Descriptor\FileDescriptor::__construct
     */
    public function testInitialize()
    {
        $this->assertAttributeEquals(self::EXAMPLE_HASH, 'hash', $this->fixture);

        $this->assertAttributeInstanceOf('phpDocumentor\Descriptor\Collection', 'namespaceAliases', $this->fixture);
        $this->assertAttributeInstanceOf('phpDocumentor\Descriptor\Collection', 'includes', $this->fixture);
        $this->assertAttributeInstanceOf('phpDocumentor\Descriptor\Collection', 'constants', $this->fixture);
        $this->assertAttributeInstanceOf('phpDocumentor\Descriptor\Collection', 'functions', $this->fixture);
        $this->assertAttributeInstanceOf('phpDocumentor\Descriptor\Collection', 'classes', $this->fixture);
        $this->assertAttributeInstanceOf('phpDocumentor\Descriptor\Collection', 'interfaces', $this->fixture);
        $this->assertAttributeInstanceOf('phpDocumentor\Descriptor\Collection', 'traits', $this->fixture);
        $this->assertAttributeInstanceOf('phpDocumentor\Descriptor\Collection', 'markers', $this->fixture);
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::__construct
     * @covers phpDocumentor\Descriptor\FileDescriptor::getHash
     */
    public function testGetHash()
    {
        $this->assertSame(self::EXAMPLE_HASH, $this->fixture->getHash());
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::setPath
     * @covers phpDocumentor\Descriptor\FileDescriptor::getPath
     */
    public function testSetAndGetPath()
    {
        $this->assertSame('', $this->fixture->getPath());

        $this->fixture->setPath(self::EXAMPLE_PATH);

        $this->assertSame(self::EXAMPLE_PATH, $this->fixture->getPath());
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::setSource
     * @covers phpDocumentor\Descriptor\FileDescriptor::getSource
     */
    public function testSetAndGetSource()
    {
        $this->assertSame(null, $this->fixture->getSource());

        $this->fixture->setSource(self::EXAMPLE_SOURCE);

        $this->assertSame(self::EXAMPLE_SOURCE, $this->fixture->getSource());
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::setNamespaceAliases
     * @covers phpDocumentor\Descriptor\FileDescriptor::getNamespaceAliases
     */
    public function testSetAndGetNamespaceAliases()
    {
        $this->assertInstanceOf('phpDocumentor\Descriptor\Collection', $this->fixture->getNamespaceAliases());

        $mockInstance = m::mock('phpDocumentor\Descriptor\Collection');
        $mock = $mockInstance;

        $this->fixture->setNamespaceAliases($mock);

        $this->assertSame($mockInstance, $this->fixture->getNamespaceAliases());
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::setIncludes
     * @covers phpDocumentor\Descriptor\FileDescriptor::getIncludes
     */
    public function testSetAndGetIncludes()
    {
        $this->assertInstanceOf('phpDocumentor\Descriptor\Collection', $this->fixture->getIncludes());

        $mockInstance = m::mock('phpDocumentor\Descriptor\Collection');
        $mock = $mockInstance;

        $this->fixture->setIncludes($mock);

        $this->assertSame($mockInstance, $this->fixture->getIncludes());
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::setConstants
     * @covers phpDocumentor\Descriptor\FileDescriptor::getConstants
     */
    public function testSetAndGetConstants()
    {
        $this->assertInstanceOf('phpDocumentor\Descriptor\Collection', $this->fixture->getConstants());

        $mockInstance = m::mock('phpDocumentor\Descriptor\Collection');
        $mock = $mockInstance;

        $this->fixture->setConstants($mock);

        $this->assertSame($mockInstance, $this->fixture->getConstants());
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::setFunctions
     * @covers phpDocumentor\Descriptor\FileDescriptor::getFunctions
     */
    public function testSetAndGetFunctions()
    {
        $this->assertInstanceOf('phpDocumentor\Descriptor\Collection', $this->fixture->getFunctions());

        $mockInstance = m::mock('phpDocumentor\Descriptor\Collection');
        $mock = $mockInstance;

        $this->fixture->setFunctions($mock);

        $this->assertSame($mockInstance, $this->fixture->getFunctions());
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::setClasses
     * @covers phpDocumentor\Descriptor\FileDescriptor::getClasses
     */
    public function testSetAndGetClasses()
    {
        $this->assertInstanceOf('phpDocumentor\Descriptor\Collection', $this->fixture->getClasses());

        $mockInstance = m::mock('phpDocumentor\Descriptor\Collection');
        $mock = $mockInstance;

        $this->fixture->setClasses($mock);

        $this->assertSame($mockInstance, $this->fixture->getClasses());
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::setInterfaces
     * @covers phpDocumentor\Descriptor\FileDescriptor::getInterfaces
     */
    public function testSetAndGetInterfaces()
    {
        $this->assertInstanceOf('phpDocumentor\Descriptor\Collection', $this->fixture->getInterfaces());

        $mockInstance = m::mock('phpDocumentor\Descriptor\Collection');
        $mock = $mockInstance;

        $this->fixture->setInterfaces($mock);

        $this->assertSame($mockInstance, $this->fixture->getInterfaces());
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::setTraits
     * @covers phpDocumentor\Descriptor\FileDescriptor::getTraits
     */
    public function testSetAndGetTraits()
    {
        $this->assertInstanceOf('phpDocumentor\Descriptor\Collection', $this->fixture->getTraits());

        $mockInstance = m::mock('phpDocumentor\Descriptor\Collection');
        $mock = $mockInstance;

        $this->fixture->setTraits($mock);

        $this->assertSame($mockInstance, $this->fixture->getTraits());
    }

    /**
     * @covers phpDocumentor\Descriptor\FileDescriptor::setMarkers
     * @covers phpDocumentor\Descriptor\FileDescriptor::getMarkers
     */
    public function testSetAndGetMarkers()
    {
        $this->assertInstanceOf('phpDocumentor\Descriptor\Collection', $this->fixture->getMarkers());

        $mockInstance = m::mock('phpDocumentor\Descriptor\Collection');
        $mock = $mockInstance;

        $this->fixture->setMarkers($mock);

        $this->assertSame($mockInstance, $this->fixture->getMarkers());
    }
}
