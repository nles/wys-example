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
