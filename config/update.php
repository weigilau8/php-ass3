<?php

// require_once();

$post_id = 1;

$query = "UPDATE posts set title=:postTitle WHERE id=:postId";

// prepare()
$stmt = $pdo->prepare();
// Execute()

$stmt->execute();



