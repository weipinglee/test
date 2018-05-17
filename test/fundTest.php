<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/29
 * Time: 15:05
 */


require 'D:/wamp64/vendor/autoload.php';
use PHPUnit\Framework\TestCase;
class fundTest extends TestCase
{


      public static function setUpBeforeClass(){

      }

      public function setup(){

      }

      public function testCheck(){
          $num = 4;

          $this->assertEquals(4,$num);

      }







      public static  function tearDownAfterClass(){

      }
}