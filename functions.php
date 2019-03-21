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

          'source' => 'Leila Khaled'

       )


);




// This is my first attempt @ the getRandomQuote function
function getRandomQuote ($quotes) {

$arrRand = array_rand ($quotes);
$randomQuote = $quotes[$arrRand];
return $randomQuote;

}

$displayRandomQuote = getRandomQuote ($quotes);

var_dump ($displayRandomQuote);




function printQuote ($quotes) {

  /* create a variable that calls the getRandomQuote() function, passing in the quotes
  array as an argument */

  $displayRandomQuote = getRandomQuote ($quotes);

  // create a variable that initiates your HTML string
  // using the template in the project instructions, add the two default quote properties

  $initiateHTMLString = '<p class="quote"> [quote here] </p>
  <p class="source"> [source here] </p>'

  //  <span class="citation"> [citation here] </span>
  //  <span class="year"> [year here] </span> </p> 

  // if the quote contains a citation value, add it the string

      /*
    Pseudo Code: If the $displayRandomQuote variable includes a citation
    add, which means concatanate citation value to $initiateHTMLString
    */

  if ($displayRandomQuote == "citation") {
   add it to string
  }


  // if the quote contains a year value, add it the string


  // close the string with the necessary closing HTML tags
  //
  // display the complete HTML string
