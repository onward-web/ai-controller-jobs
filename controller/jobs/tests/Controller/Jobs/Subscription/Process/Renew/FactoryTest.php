<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2018
 */


namespace Aimeos\Controller\Jobs\Subscription\Process\Renew;


class FactoryTest extends \PHPUnit\Framework\TestCase
{
	public function testCreateController()
	{
		$context = \TestHelperJobs::getContext();
		$aimeos = \TestHelperJobs::getAimeos();

		$obj = \Aimeos\Controller\Jobs\Subscription\Process\Renew\Factory::createController( $context, $aimeos );
		$this->assertInstanceOf( '\\Aimeos\\Controller\\Jobs\\Iface', $obj );
	}


	public function testFactoryExceptionWrongName()
	{
		$context = \TestHelperJobs::getContext();
		$aimeos = \TestHelperJobs::getAimeos();

		$this->setExpectedException( '\\Aimeos\\Controller\\Jobs\\Exception' );
		\Aimeos\Controller\Jobs\Subscription\Process\Renew\Factory::createController( $context, $aimeos, 'Wrong$$$Name' );
	}


	public function testFactoryExceptionWrongClass()
	{
		$context = \TestHelperJobs::getContext();
		$aimeos = \TestHelperJobs::getAimeos();

		$this->setExpectedException( '\\Aimeos\\Controller\\Jobs\\Exception' );
		\Aimeos\Controller\Jobs\Subscription\Process\Renew\Factory::createController( $context, $aimeos, 'WrongClass' );
	}


	public function testFactoryExceptionWrongInterface()
	{
		$context = \TestHelperJobs::getContext();
		$aimeos = \TestHelperJobs::getAimeos();

		$this->setExpectedException( '\\Aimeos\\Controller\\Jobs\\Exception' );
		\Aimeos\Controller\Jobs\Subscription\Process\Renew\Factory::createController( $context, $aimeos, 'Factory' );
	}

}
