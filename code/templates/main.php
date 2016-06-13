<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WYS Demo</title>

  <link rel="stylesheet" type="text/css" href="/code/assets/css/main.css" />
  <?php
    // NOTE: For the direct path to editor of the active page you will
    // need to know both the $collection_id and the id of the page.
    // These are both set in the controller in this case (index.php)
    $wys = ["edit_path" => $collection_id."/".$page["_id"]];
    require('cockpit/wys/head.php');
  ?>

</head>
<body>

<div id="page-wrapper">
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
<div>

</body>
</html>
