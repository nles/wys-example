<h1>Static header</h1>
<?php
  // wys quick editor
  $wqe_meta = [
    'type'=>'collection',
    'slug'=>'pages',
    'field'=>'content',
    'id'=>$page["_id"]
  ];
  print wqe($page["content"],$wqe_meta);
?>
<br /><br />
<br /><br />
<?php if($GLOBALS['logged_in']): ?>
<strong>Tip:</strong> You can also click CTRL/CMD + e to start the quick editor<br /> and while editing, use CTRL/CMD + s to save changes.<br />
<a id="reset-tour" href="#">Reset tour and log out (show the instruction tour automatically on next login)</a>
<?php else: ?>
<a href="/cockpit">Click here to login (username: admin / password: admin)</a>
<?php endif ?>
