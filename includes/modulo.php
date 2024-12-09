<?php
// A solution for resolving grid columns on a page. $cell is a counting variable, initialized to 0 outside the loop.
$cell = 0;
// The loop here is like the while() loop in index.php, you can loop any way. This example is for 3 columns of content, so $cell will be 1, 2, 3 then get set back to 1 to start the next row in the grid.



for($i = 0; $i < 12; $i++) {
    $cell=$cell+1;
if($cell % 2 > 0) {
    echo '<div class="col-start-1 col-span-6>';  
}else{
    echo '<div class="col-start-6 col-span-6>';
}
}

?>