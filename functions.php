<?php
  $quotes = array (

    array (

        'quote' => 'O-P-U-L-E-N-C-E: Opulence! You own everything. Everything
        is yours.',

        'source' => 'Junior LaBeija',

        'citation' => '<i>Paris is burning</i>',

        'year' => 1991
      ),


    array (

        'quote' => 'For the master’s tools will never dismantle the master’s
        house. They may allow us to temporarily beat him at his own game,
        but they will never enable us to bring about genuine change.
        Racism and homophobia are real conditions of all our lives in this
        place and time. I urge each one of us here to reach down into that
        deep place of knowledge inside herself and touch that terror
        and loathing of any difference that lives here. See whose face it
        wears. Then the personal as the political can begin to illuminate
        all our choices',

        'source' => 'Audre Lorde',

        'citation' => 'Sister Outsider: Essays and Speeches',

        'year' => 1984

    ),



      array (

            'quote' => "When an individual is protesting society's
            refusal to acknowledge his dignity as a human being,
            his very act of protest confers dignity on him.",

            'source' => 'Bayard Rustin'

          ),

        array (

          'quote' => 'Our ultimate objective in learning about anything is
          to try to create and develop a more just society.',

          'source' => 'Yuri Kochiyama',
        ),

    array (

          'quote' => 'Who planted terrorism in our area? Some came and took
          our land, forced us to leave, forced us to live in camps. I think
          this is terrorism. Using means to resist this terrorism and stop its
          effects - this is called struggle.',

          'source' => 'Leila Khaled',
          'year' => 2001
       )


);




// This is my first attempt @ the getRandomQuote function

function getRandomQuote ($quotes) {

$arrRand = array_rand ($quotes);
$randomQuote = $quotes[$arrRand];
return $randomQuote;

}
/*Create a variable that calls the getRandomQuote function, with the quotes
array as a parameter.*/
$displayRandomQuote = getRandomQuote ($quotes);

//var_dump ($displayRandomQuote);




function printQuote ($quotes) {

  /*Create a variable that calls the getRandomQuote function, with the quotes
  array as a parameter.*/
  $displayRandomQuote = getRandomQuote ($quotes);

//Create a variable that initiates HTML string
  /*the $initiateHTMLString variable is only accesible within the printQuote function.
  Maybe it should be accesible to all of the code? */

  Global $initiateHTMLString;
  $initiateHTMLString =

// Use the template in the project instructions & add the 2 default quote props

  //Quote

  '<p class="quote"> $displayRandomQuote ["quote"] </p>
  <p class="source"> $displayRandomQuote ["source"] </p>

  <span class="citation"> $quotes ["citation"] </span>
   <span class="year"> $quotes ["year"] </span> </p>';



  if (
    isset (($displayRandomQuote['citation']))
    )
   {
   echo  $displayRandomQuote ["citation"];
  }

    if (isset (($displayRandomQuote['year']))
    )
     {
     echo $displayRandomQuote ["year"];
   }

}
$printingQuotes = printQuote ($quotes);
var_dump ($printingQuotes);

//print $initiateHTMLString;
