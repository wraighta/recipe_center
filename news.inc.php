<h3>What's Cookin'</h3>
<br>The latest cooking news<br>
<?php

$con = mysqli_connect("localhost", "test", "test","recipe") or die('Could not connect to server');


$query = "SELECT title,date,article,website from news order by date desc limit 0,2";
$result = mysqli_query($con, $query) or die('Sorry, could not get news articles');

while($row=mysqli_fetch_array($result, MYSQL_ASSOC))
{
    $date = $row['date'];
    $title = $row['title'];
    $article = $row['article'];
    $web_link = $row['website'];

    $query2 = "SELECT left(article,200) from news order by date desc limit 0,2";
    $result2 = mysqli_query($con, $query2) or die('Sorry, could not get article length');
    $num_fields = mysqli_num_fields($result2);

    if ($num_fields >= 200){
    	$print_article = $article; 
    	
    }
    else{
        if (is_null($web_link)){ 
    	   $print_article = substr($article,0,200)."...there is more but it has been cut off for space.<br>";
        }
        else{
            $print_article = substr($article,0,200)."<a href=\"$web_link\"> click here to read more...</a>";

        }


    }
    echo "<br>$date - <b>$title</b><br>$print_article<br><br>";
}

?>
