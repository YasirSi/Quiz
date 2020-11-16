<?php
include 'connect.php';

$query = "SELECT * FROM ques";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<p>Quiz</p>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Test Your Knowledge</h2>
				<p>
					This is a multiple choice quiz to test your PHP Knowledge.
				</p>
				<ul>
					<li><strong>Total Questions:</strong><?php echo $total_questions; ?> </li>

					<li><strong>Type:</strong> Multiple Choice</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*2; ?></li>

				</ul>

				<a href="question.php?n=1" class="start">Start the Quiz</a>

			</div>

	</main>
