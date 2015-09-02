<?php
/**
 * Simple script to draw square, triangles, chessboard and what you want (he he joke)
 */
include_once 'lib.php';

if (0 < count($_POST)) {
	$validation = validation();
	if (true === $validation['result']) {
		echo $validation['message'];
		//draw();
	} else {
		echo $validation['message'];
	}
}
?>
<hr>
<h1>Figures</h1>
<form action="index.php" method="POST" id="figures">

	<p>Figure type:</p>
	<select name="type" form="figures">
		<option value="triangle">Triangle</option>
		<option value="square">Square</option>
		<option value="double_triangle">Double Triangle</option>
		<option value="chess_board">Chess Board</option>
	</select>
	<br />

	<p>Size</p>
	<input type="text" name="size">
	<br />

	<p>Scriber</p>
	<input type="text" name="scriber">
	<br />

	<p>Name</p>
	<input type="text" name="name">
	<br />

	<p>Multiple Figures</p><input type="checkbox" name="multi" value="multi">
	<br/>
	<select multiple name="multi_figures_list" form="figures">
		<option value="triangle">Triangle</option>
		<option value="square">Square</option>
		<option value="double_triangle">Double Triangle</option>
		<option value="chess_board">Chess Board</option>
	</select>

	<br/>
	<input type="submit" value="Create Figures">
</form>