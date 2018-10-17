<?php
$block_helloworld_capabilities = array('block/helloworld:view' 
=> array('captype' => 'read',
'contextlevel' => CONTEXT_SYSTEM,
'legacy' => array(
'guest' => CAP_PREVENT,
'student' => CAP_PREVENT,
'teacher' => CAP_PREVENT,
'editingteacher' => CAP_PREVENT,
'coursecreator' => CAP_PREVENT,
'admin' => CAP_ALLOW
)
)
);
?>