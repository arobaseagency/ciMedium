<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Administration :: {block "title"}{/block}</title>

  <meta name="robots" content="noindex, nofollow" />

  <link rel="shortcut icon" href="{img_url()}favicon.ico" />

  <link rel="stylesheet" type="text/css" href="{admin_assets('css/metro-bootstrap.css')}" media="screen" />
  <link rel="stylesheet" type="text/css" href="{admin_assets('css/metro-bootstrap-icons.css')}" media="screen" />
  <link rel="stylesheet" type="text/css" href="{admin_assets('css/default.css')}" media="screen" />
{block "stylesheet"}{/block}

{block "javascript"}{/block}
</head>
<body>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">

        <a href="#" class="brand">Home</a>

        <ul class="nav">
          <li><a href="">item1</a></li>
          <li><a href="">item2</a></li>
          <li><a href="">item3</a></li>
          <li><a href="">item4</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div id="conteneur" class="container">

    <div class="row">
      <div class="span2">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias magni.</p>
      </div>

      <div class="span10">
        {block "content"}{/block}
      </div>
    </div>

  </div>

<script type="text/javascript" src="{assets('js/jquery-1.9.1.min.js')}"></script>
<script type="text/javascript" src="{admin_assets('js/metro-bootstrap.js')}"></script>
{block "sourceJs"}{/block}
</body>
</html>