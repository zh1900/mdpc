<?php
class block_helloworld extends block_base
{
function init() {
$this->title = get_string('helloworld','block_helloworld');
$this->version = 2010080700;
}//function init
function get_content() {
if ($this->content !== NULL) {
return $this->content;
}
$this->content = new stdClass;
$this->content->text = 'Hello World!';
return $this->content;
}//function get_content
}//class block_helloworld
?>