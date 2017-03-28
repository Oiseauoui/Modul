<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 12:02
 */

Class Object
{
    function Object($entry)
    {
        $entry->name='John';
    }
}
class Entry
{
    var$name="Maria";
}
$entry=new Entry();
$obj = new Object($entry);
print $entry->name;
//John