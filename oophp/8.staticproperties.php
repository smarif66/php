<?php
class MyClass
{
  public static $count = 0;
  public static function plusOne()
  {
  return "The count is " . ++self::$count . ".<br />";
  }
}
do
{
  // Call plusOne without instantiating MyClass
  echo MyClass::plusOne();
}
while ( MyClass::$count < 10 );


?>