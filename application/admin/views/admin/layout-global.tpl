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

  <div id="conteneur" class="container">

    <div class="row">
      {block "content"}{/block}
    </div>

  </div>

<script type="text/javascript" src="{assets('js/jquery-1.9.1.min.js')}"></script>
<script type="text/javascript" src="{admin_assets('js/metro-bootstrap.js')}"></script>
{block "srcJavascript"}{/block}
</body>
</html>