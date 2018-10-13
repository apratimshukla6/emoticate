
<?php
 
// -------------------------------------------------------------------------------------------------------
// First call where you take a single statement.
/*
require(__DIR__ . '/vendor/autoload.php');
use \IndicoIo\IndicoIo as IndicoIo;
IndicoIo::$config['api_key'] = '94a022cf6ca0ea901799a4ddb4e2628b';

// single example
$a = IndicoIo::sentiment(
    "Good and positive!"
);
echo $a;
//  batch example
/*IndicoIo::sentiment([
    "I love writing code!",
    "Alexander and the Terrible, Horrible, No Good, Very Bad Day"
]);
*/
// -------------------------------------------------------------------------------------------------------


// require(__DIR__ . '/vendor/autoload.php');
// use \IndicoIo\IndicoIo as IndicoIo;

// IndicoIo::sentiment(
//     ['indico is so easy to use!', 'Still really easy, yiss'],
//     $api_key="94a022cf6ca0ea901799a4ddb4e2628b"
// );

// -------------------------------------------------------------------------------------------------------


// Single and Multiple in one go using loops for multiple and break <br>
/*
require(__DIR__ . '/vendor/autoload.php');
use \IndicoIo\IndicoIo as IndicoIo;
IndicoIo::$config['api_key'] = '94a022cf6ca0ea901799a4ddb4e2628b';

# single example
$a = IndicoIo::sentiment(
    "Good and positive!"
);
echo $a;
echo "<br>";
# batch example
$bs = IndicoIo::sentiment([
    "I love writing code!",
    "Alexander and the Terrible, Horrible, No Good, Very Bad Day"
]);

foreach($bs as $b){
    echo($b);
    echo "<br>";
}
*/

// -------------------------------------------------------------------------------------------------------

// Political statements Use of nested loop for multiple : Gauge the political leanings of a phrase or document.
/*
require(__DIR__ . '/vendor/autoload.php');
use \IndicoIo\IndicoIo as IndicoIo;
IndicoIo::$config['api_key'] = '94a022cf6ca0ea901799a4ddb4e2628b';

# single example
$a = IndicoIo::political(
    "I have a constitutional right to bear arms!"
);

foreach($a as $b){
    echo($b);
    echo "<br>";
}


# batch example

$bs = IndicoIo::political([
    "I have a constitutional right to bear arms!",
    "I wish more candidates cared about the environment."
]);
foreach($bs as $b)
{
foreach($b as $a){
     echo($a);
    echo "<br>";
}
echo "<br>";
}

*/
/*
// single output
Array (
  [libertarian] => 0.27192999211817354,
  [green] => 0.06525078204908323,
  [liberal] => 0.11033990553871972,
  [conservative] => 0.5524793202940235
)

// batch output
Array (
    [0] => Array (
        [libertarian] => 0.27192999211817354,
        [green] => 0.06525078204908323,
        [liberal] => 0.11033990553871972,
        [conservative] => 0.5524793202940235
    ),
    [1] => Array (
        [libertarian] => 0.02334343866477883,
        [green] => 0.03302544570586526,
        [liberal] => 0.9254000702504355,
        [conservative] => 0.01823104537892042
    )
)


*/

// -------------------------------------------------------------------------------------------------------

//  Twitter Engagement : Predict audience engagement for a given tweet.
/*
require(__DIR__ . '/vendor/autoload.php');
use \IndicoIo\IndicoIo as IndicoIo;
IndicoIo::$config['api_key'] = '94a022cf6ca0ea901799a4ddb4e2628b';

# single example
$a = IndicoIo::twitter_engagement(
    // "Don't forget to vote tomorrow! #democracy #tom4classpresident"
);
echo $a;
echo "<br>";

# batch example
$bs = IndicoIo::twitter_engagement([
    "Don't forget to vote tomorrow! #democracy #tom4classpresident",
    "Severe weather warning. We advise you stay home. #weather #tornado #storm"
]);
foreach($bs as $b){
    echo($b);
    echo "<br>";
}

*/

// -------------------------------------------------------------------------------------------------------
// Personality : Predicts the personality traits of a text's author.
/*
require(__DIR__ . '/vendor/autoload.php');
use \IndicoIo\IndicoIo as IndicoIo;
IndicoIo::$config['api_key'] = '94a022cf6ca0ea901799a4ddb4e2628b';
/*
# single example
$a = IndicoIo::personality(
    "I love my friends"
);
foreach($a as $b){
    echo($b);
    echo "<br>";
}

# batch example

$bs = IndicoIo::personality([
    "I love my friends",
    "Everything is awesome!"
]);

foreach($bs as $b)
{
foreach($b as $a){
     echo($a);
    echo "<br>";
}
echo "<br>";
}

*/

// -------------------------------------------------------------------------------------------------------

//  Emotion : Predicts the emotion expressed by an author in a sample of text.
/*
require(__DIR__ . '/vendor/autoload.php');
use \IndicoIo\IndicoIo as IndicoIo;
IndicoIo::$config['api_key'] = '94a022cf6ca0ea901799a4ddb4e2628b';

# single example
$a=IndicoIo::emotion(
    "I did it. I got into Grad School. Not just any program, but a GREAT program. :-)"
);
foreach($a as $b){
    echo($b);
    echo "<br>";

}
echo "<br>";

# batch example
$bs = IndicoIo::emotion([
    "I really love that TV Series and is a great episode. :-)",
    "Like seriously my life is bleak, I have been unemployed for almost a year and I am broke."
]);
foreach($bs as $b)
{
foreach($b as $a){
     echo($a);
    echo "<br>";
}
echo "<br>";
}
*/

// Output
/*
// single output
Array (
  [anger] => 0.007581704296171665,
  [joy] => 0.07016665488481522,
  [fear] => 0.8000516295433044,
  [sadness] => 0.02512381225824356,
  [surprise] => 0.06534374748375202
)

// batch output
Array (
    [0] => Array (
        [anger] => 0.007581704296171665,
        [joy] => 0.07016665488481522,
        [fear] => 0.8000516295433044,
        [sadness] => 0.02512381225824356,
        [surprise] => 0.06534374748375202
    ),
    [1] => Array (
        [anger] => 0.007581704296171665,
        [joy] => 0.07016665488481522,
        [fear] => 0.8000516295433044,
        [sadness] => 0.02512381225824356,
        [surprise] => 0.06534374748375202
    )
)
*/

// ---------------------------------------------TEXT ANALYSIS RELATED APIs ENDS HERE!----------------------------------------------------------

// -------------------------------------------------------------------------------------------------------



//  Image calling method


require(__DIR__ . '/vendor/autoload.php');
use \IndicoIo\IndicoIo as IndicoIo;
IndicoIo::$config['api_key'] = '94a022cf6ca0ea901799a4ddb4e2628b';

# single example
$a = IndicoIo::fer(
    "happy_kid.png"
);
foreach($a as $b){
    echo($b);
    echo"<br>";
}
























































































































































?>


