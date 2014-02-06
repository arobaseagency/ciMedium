<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>{block "title"}Soirée Pub{/block}</title>

  <meta name="keywords" content="{block "metaKeywords"}{/block}" />
  <meta name="description" content="{block "metaContent"}{/block}" />
  <meta name="robots" content="index,follow" />

  <link rel="shortcut icon" href="{img_url()}favicon.ico" />

  <link rel="stylesheet" type="text/css" href="{assets('css/style.css')}" media="screen" />
{block "stylesheet"}{/block}

  <script type="text/javascript" src="{assets('js/jquery-1.9.1.min.js')}"></script>
{block "javascript"}{/block}
</head>
<body>

  {block "content"}{/block}

</body>
{block "sourceJs"}{/block}
</html>