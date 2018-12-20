<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Forms\Element\File;

use IntegrationTester;

class PrepareAttributesCest
{
    /**
     * Tests Phalcon\Forms\Element\File :: prepareAttributes()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function formsElementFilePrepareAttributes(IntegrationTester $I)
    {
        $I->wantToTest("Forms\Element\File - prepareAttributes()");
        $I->skipTest("Need implementation");
    }
}