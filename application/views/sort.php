<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sorting Demo</title>

	<style>
		#container{
			padding: 5%;
		}
	</style>
</head>
<body>
<h2>Sorting Demo</h2>
<div id="container">
	<h4><a href="<?= base_url('bubble_sort'); ?>">Click Here for Bubble Sort</a></h4>
	<h4><a href="<?= base_url('selection_sort'); ?>">Click Here for Selection Sort</a></h4>
</div>

</body>
</html>