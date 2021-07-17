<?php

/*
file_put_contents('php://stdout', 'This is stdout content');
file_put_contents('php://stderr', 'This is stderr content');

// Open handle and write multiple times.
$stdout = fopen('php://stdout', 'w');

fwrite($stdout, 'Hello world from stdout' . PHP_EOL);
fwrite($stdout, 'Hello again');

fwrite(STDOUT, 'foo');

fclose($stdout);



for ($i=1; $i < 6; $i++)
{
    // Write some output.
    fwrite(STDOUT,$i."\n");
    sleep(1);
}

fwrite(STDOUT,'Please enter your name'."\n");
// Read the input.
$ssName=fgets(STDIN);
fwrite(STDOUT,'Hello '.$ssName);
// Exit correctly.
exit(0);
/*
 * 

$asColors=array('a'=>'Red','b'=>'Green','c'=>'Blue',);
fwrite(STDOUT,'Pick some colors (enter the letter and press return)'."\n\n");
fwrite(STDOUT,'Enter "q" to quit'."\n");
// Display the choices.
foreach ($asColors as $ssChoice => $ssColor)
{
    fwrite(STDOUT,"\t".$ssChoice.': '.$ssColor."\n");
}
// Loop until they enter 'q' for Quit.
do
{
    // A character from STDIN, ignoring whitespace characters.
    do $ssSel=fgetc(STDIN);
    while (trim($ssSel) == '');
    if (array_key_exists($ssSel,$asColors))
        fwrite(STDOUT,'You picked '.$asColors[$ssSel]."\n\n");
}
while ($ssSel != 'q');
exit(0);
*/
 
    if (!@mysql_connect('localhost','disha','disha'))
    {
        // Write to STDERR.
        fwrite(STDERR,mysql_error()."\n");
        exit(1);
    }
    
    
?>



