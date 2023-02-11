
<?php
$dsn = 'mysql:dbname=posse;host=db' ;
$user = 'root' ;
$password = 'root' ;

$dbh = new PDO($dsn, $user, $password);

?>

<?php
$questions = $dbh->query("SELECT * FROM questions")->fetchAll(PDO::FETCH_ASSOC);
$question_id = $_POST["question_id"];
foreach ($questions as $question) { 
  $id = $question["id"];
} 
$dbh->query("DELETE FROM questions WHERE $id=$question_id");

echo($id);
echo($question_id);


?> 