<?php
//Create multidimensional associative array named quotes
//Include at least 5 quotes

  $quotes = array (

    array (

        'quote' => "O-P-U-L-E-N-C-E: Opulence! You own everything. Everything
        is yours.",

        'source' => "Junior LaBeija",

        'citation' => "<i>Paris is Burning</i>",

        'year' => 1991),


    array (

        'quote' => 'Finish him.',

        'source' => 'Mortal Combat'),

      array (

            'quote' => "When an individual is protesting society's
            refusal to acknowledge his dignity as a human being,
            his very act of protest confers dignity on him.",

            'source' => 'Bayard Rustin'),

        array (

          'quote' => 'you broke the ocean in half to be here. <br>
          only to meet nothing that wants you. – immigrant.',

          'source' => 'Nayyirah Waheed',
          'citation' => '<i>Salt</i>',
          'year' => 2013),


    array (

          'quote' => 'Who gone check me <i>boo</i>?',

          'source' => 'Sheree Whitefield',
          'citation' => 'Real Housewives of Atlanta')


);





//Create getRandomQuote function. This function will use the quotes array as its parameter.

function getRandomQuote ($quotes) {
$arrRand = array_rand ($quotes);
$randomQuote = $quotes[$arrRand];
return $randomQuote;

}


//Create the printQuote function. This will also use the quotes array as its parameter.
function printQuote ($quotes) {

/*
  Create a variable that calls the getRandomQuote function, with the quotes
  array as a parameter.
*/

  $displayRandomQuote = getRandomQuote ($quotes);

  $initiateHTMLString =

// Use the template in the project instructions & add the 2 default quote props

'<p class="quote">' . $displayRandomQuote["quote"] .
'</p> <p class="source">' . $displayRandomQuote["source"] ;

// The span elements needs to be nested within the "if" statements.

if (
  isset (($displayRandomQuote["citation"]))
  )
 {
 $initiateHTMLString .= '<span class="citation">' .$displayRandomQuote["citation"].'</span>' ;
}

if (isset (($displayRandomQuote["year"]))
    )
    {
  $initiateHTMLString .= '<span class="year">' . $displayRandomQuote["year"] .'</span> </p>';
   }

   return $initiateHTMLString;
}
//Remember to display function after returning it or else code will not be printed.

print $initiateHTMLString;


?>
