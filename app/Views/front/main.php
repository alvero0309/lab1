

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$this->renderSection('title')?></title>
	<link rel="stylesheet" href="<?php echo('http://localhost/v1/css/bulma.min.css')?>">
</head>

<body>
	
<?= view_cell('App\Libraries\Components::getHeader'); ?>


<?= $this->renderSection('content')?>

<?= view_cell('App\Libraries\Components::getFooter'); ?>



</body>
</html>