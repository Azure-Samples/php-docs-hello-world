<?php
// BaseClass
class publ {
public $tagging_line = "Scientists & Engineers are the real Geeks";
function display() {
echo $this->tagging_line."\n";
}
}
// SubClass
class subc extends publ {
function show(){
echo $this->tagging_line;
}
}
// Object Declaration
$obj= new subc;
// Scientists & Engineers are the real Geeks!
echo $obj->tagging_line."\n";
// Scientists & Engineers are the real Geeks!
$obj->display();
// Scientists & Engineers are the real Geeks!
$obj->show();
?>
