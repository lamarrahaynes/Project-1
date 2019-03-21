
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

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



  function getRandomQuote ($quotes) {

   array_rand ($quotes);
   return '';

  }


  getRandomQuote ($quotes);
  echo "$quotes";


  <div class="container">
    <div id="quote-box">
      <p class="quote">Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.</p>
      <p class="source">Patrick McKenzie<span class="citation">Twitter</span><span class="year">2016</span></p>
  </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
