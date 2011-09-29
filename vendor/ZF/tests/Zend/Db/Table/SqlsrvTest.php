<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Db
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: SqlsrvTest.php 23772 2011-02-28 21:35:29Z ralph $
 */

require_once 'Zend/Db/Table/TestCommon.php';





/**
 * @category   Zend
 * @package    Zend_Db
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Db
 * @group      Zend_Db_Table
 */
class Zend_Db_Table_SqlsrvTest extends Zend_Db_Table_TestCommon
{
    public function testTableInsertSequence()
    {
        $this->markTestSkipped($this->getDriver().' does not support sequences.');
    }

    public function testTableCascadeUpdate()
    {
        $this->markTestSkipped($this->getDriver() . ' cannot update identity columns.');
    }

    public function getDriver()
    {
        return 'Sqlsrv';
    }
}
