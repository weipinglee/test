<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/29
 * Time: 15:05
 */


require 'D:/wamp64/vendor/autoload.php';
use PHPUnit\Framework\TestCase;
class demoTest extends TestCase
{


      public static function setUpBeforeClass(){

      }

      public function setup(){

      }

      public function testFund(){
          $arr = array(1,2,3);

          $this->assertEquals(3,count($arr));
          array_push($arr,4);
          $this->assertEquals(3,count($arr));

      }







      public static  function tearDownAfterClass(){

      }
}