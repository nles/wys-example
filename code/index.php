<?php
// Lime base
$app = new Lime\App();

// globals
$GLOBALS['logged_in'] = ($app("session")->read("cockpit.app.auth"));

// routes
$app->bind("/", function($params) use($app) {
  $page_collection = cockpit('collections:get_collection_by_slug', 'pages');
  // just get the first one
  $page = $page_collection->find()->limit(1)->toArray()[0];
  $collection_id = get_collection_id_from_name($page_collection->name);
  $locals = [
    'page'=>$page,
    'collection_id'=>$collection_id
  ];
  return $app->render('code/views/front.php with code/templates/main.php',$locals);
});

// run
$app->run();
?>
