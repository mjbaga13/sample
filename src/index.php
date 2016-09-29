<?php

require_once '../vendor/autoload.php';

use Carbon\Carbon;

$now = Carbon::now();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sample Github</title>
<meta charset="utf-8">
<style>
.container {
	width: 1120px;
	margin: 0 auto;
}
</style>
</head>
<body>
    <div class="container">
    	<h1>Today is <?= $now->format('jS M') ?></h1>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, totam minus soluta sed reiciendis, nesciunt recusandae fugit enim magnam eum quaerat molestiae! Harum blanditiis repellendus vero, dignissimos quis similique asperiores voluptatibus. Voluptates, deleniti fugit nesciunt fugiat facilis corporis eaque obcaecati mollitia hic blanditiis quisquam neque consectetur odit molestias nam at.</p>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ad, porro dolorum sed magni? Omnis quod laudantium, debitis sapiente reiciendis!</p>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos facere officia consequatur provident at explicabo libero voluptate quam, tempora harum.</p>
	</div>
</body>
</html>