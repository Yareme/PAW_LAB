<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$page_description|default:'Opis domyślny'}">
	<title>{$page_title|default:"Tytuł domyślny"}</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
</head>
<body>

<div class="header">
	<h1>{$page_title|default:"Tytuł domyślny"}</h1>
	<h1>{$page_header|default:"Tytuł domyślny"}</h1>
	<p>
		{$page_description|default:"Opis domyślny"}
	</p>
	<p>Tylko admin może zobaczyć historie</p>
</div>

<div class="content">
{block name=content} Domyślna treść zawartości .... {/block}
</div><!-- content -->


<div class="footer">
	<p>
{block name=footer} Domyślna treść stopki .... {/block}
	</p>
	<p>
		 Specalizacja PAW grupa 3.
	</p>
</div>

</body>
</html>