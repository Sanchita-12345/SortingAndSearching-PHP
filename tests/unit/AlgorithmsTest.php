<?php

use PHPUnit\Framework\TestCase;
require 'Algorithms.php';

class AlgorithmsTest extends TestCase{

   //linearsearch Test case
   
   public function testChecksLinearSearch(){
      $al=new Algorithms();
      $list=array(5,10,15,20,25,30);
      $test=$al->linearSearch($list,25);
      $this->assertEquals($test,4);
   }
   
  public function testChecksBinarySearch(){
      $al=new Algorithms();
      $list=array(10, 20, 30, 40, 50);
      $test=$al->binarySearch($list,40);
      $this->assertEquals($test,3);
   }

   public function  testChecksInterpolationSearch(){
      $al=new Algorithms();
      $list = array(2,14, 25, 43,758,999,1200);
      $test=$al->interpolationSearch($list,999);
      $this->assertEquals($test,5);
   }

   public function testChecksInsertionSort(){
      $al=new Algorithms();
      $test_array=array(5,4,3,2);
      $actual=$al->insertion_sort($test_array);
      $expected=array(2,3,4,5);
      $this->assertEquals($actual,$expected);
   }

   public function testChecksMergeSort(){
      $al=new Algorithms();
      $test_array=array(96, 74, 88);
      $actual=$al->merge_sort($test_array);
      $expected=array(74,88,96);
      $this->assertEquals($actual,$expected);
   }
}
?>
