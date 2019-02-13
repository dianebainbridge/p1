<?php
function getRandomQuote()
{
    $quote_array = array("If you can't explain it simply, you don't understand it well enough. Albert Einstein",
                     "My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time. Steve Jobs",
                     "We all need people who will give us feedback. That's how we improve. Bill Gates");
    echo $quote_array[array_rand($quote_array)];
}
?>
<!DOCTYPE html>
<html lang>
    <head>
        <title>Diane Bainbridge</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='css/p1.css' rel='stylesheet'>
    </head>
    <body>
        <div class ="content">
            <div class="headerLeft">
                <img class="headerImage" src='images/pic.png' alt='Picture of Diane Bainbridge'>
            </div>
            <div class="headerRight">
                <span class="headerText">About Me</span>
                <p class="contentText">
                    I'm Diane. I currently work as a web developer.
                    Our company recently started using PHP, previously we had used
                    mostly .NET I used PHP years ago to create an online soccer scheduling web site for our town but I thought it
                    was time to update my skills and the tools I use so I decided to take this class.
                </p>
                <p class="quote"> - Thought for today: <?php getRandomQuote(); ?></p>
            </div>
        </div>
    </body>
</html>
