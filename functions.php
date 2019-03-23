<?php
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

//citation and year are showing up above printed quote in browser
        array (

          'quote' => 'you broke the ocean in half to be here. <br>
          only to meet nothing that wants you. – immigrant.',

          'source' => 'Nayyirah Waheed',
          'citation' => '<i>Salt</i>',
          'year' => 2013),

//Extra comma appearing after citation in browser
//citation is showing up above printed quote in browser
    array (

          'quote' => 'Who gone check me <i>boo</i>?',

          'source' => 'Sheree Whitefield',
          'citation' => '"Real Housewives of Atlanta"')


);




// This is my first attempt @ the getRandomQuote function

function getRandomQuote ($quotes) {

$arrRand = array_rand ($quotes);
$randomQuote = $quotes[$arrRand];
return $randomQuote;

}
/*Create a variable that calls the getRandomQuote function, with the quotes
array as a parameter.*/
//$displayRandomQuote = getRandomQuote ($quotes);

//var_dump ($displayRandomQuote);




function printQuote ($quotes) {

  /*Create a variable that calls the getRandomQuote function, with the quotes
  array as a parameter.*/
  $displayRandomQuote = getRandomQuote ($quotes);

  $initiateHTMLString =

// Use the template in the project instructions & add the 2 default quote props

'<p class="quote">' . $displayRandomQuote["quote"] .
'</p> <p class="source">' . $displayRandomQuote["source"] . ' ' ;

if (
  isset (($displayRandomQuote["citation"]))
  )
 {
 $initiateHTMLString .=  $displayRandomQuote ["citation"];
}

    if (isset (($displayRandomQuote["year"]))
    )
     {
     $initiateHTMLString .= $displayRandomQuote ["year"];
   }

   return $initiateHTMLString;

   '<span class="citation">' . $displayRandomQuote["citation"] . '</span>'  . ' ' .;
    '</span> <span class="year">' . $displayRandomQuote["year"] .'</span>
   </p>';


}
print $initiateHTMLString;
