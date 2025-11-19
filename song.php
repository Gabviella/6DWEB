<?php
$title  = "Dark Red";
$artist = "Steve Lacy";
$mood = "Emotional";
$verseCount = 3;
$repeatChorus = 3;
$nouns = ["something", "me","what","nose","she","you","baby","girl","babe","darling","way","her","mind","thoughts"];
$verbs = ["happen","know","feel","coming","leave","hope","give","belong","think","drives","want","wanna","let","linger"];
$adjectives = ["bad","sad","only","fine","wrong","much"];

$verse1 = [
    "Something bad is 'bout to happen to me
    I don't know what, but I feel it coming
    Might be so sad, might leave my nose running
    I just hope she don't wanna leave me"
];

$chorus = [
    "Don't you give me up, please don't give up
    On me, I belong with you and only you, baby
    Only you, my girl, only you, babe
    Only you, darling, only you, babe
    Only you, my girl, only you, babe
    Only you, darling, only you"
];

$verse2 = [
    "Something bad is 'bout to happen to me
    Why I feel this way, I don't know maybe
    I think of her so much, it drives me crazy
    I just don't want her to leave me"
];

$verse3 = [
    "What if she's fine?
    It's my mind that's wrong
    And I just let bad thoughts
    Linger for far too long
    What if (if), she's fine? (Fine)
    It's my mind that's wrong
    And I just (just), let bad thoughts (thoughts)
    Linger for far too long"
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Red</title>
<style>
    body {
        background-color:rgb(70, 18, 18);
        font-family: 'Georgia', serif;
        line-height: 1.8;
        text-align: center;
    }

    h1 {
        font-size: 3rem;
        color: #ff3333;
        margin-bottom: 0;
    }

    h2 {
        font-size: 1.5rem;
        color: #ff9999;
        margin-top: 0;
    }

    p {
        white-space: pre-line;
        margin: 10px 0;
        color:rgb(255, 255, 255);
    }

    h3 {
        font-size: 1.4rem;
        margin-top: 40px;
        padding-bottom: 5px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #ff9999;
    }

    .mood {
        font-weight: bold;
        color:rgb(255, 255, 255);
        border-bottom: 2px solid #ff9999;
        padding-bottom: 15px;
    }

    .br{
        border-top: 2px solid #ff9999;
        padding-top: 15px;
    }

</style>
</head>
<body>
    <h1><?php echo $title; ?></h1>
        <h2><?php echo $artist; ?></h2>
        <p class="mood">Mood: <?php echo $mood; ?></p>

        <h3>Verse 1</h3>
        <?php foreach ($verse1 as $line) {
            echo "<p>$line</p>";
        } ?>

        <h3>Chorus</h3>
        <?php
        foreach ($chorus as $line) {
            echo "<p>$line</p>";
        } ?>

        <h3>Verse 2</h3>
        <?php foreach ($verse2 as $line) {
            echo "<p>$line</p>";
            } ?>

        <h3>Chorus</h3>
        <?php
        foreach ($chorus as $line) {
            echo "<p>$line</p>";
        } ?>

        <h3>Verse 3</h3>
        <?php foreach ($verse3 as $line) {
            echo "<p>$line</p>";
            } ?>

            <h3>Chorus</h3>
        <?php
        foreach ($chorus as $line) {
            echo "<p>$line</p>";
        }  ?>

        <div class="br">
        <?php
        $lines = "Lines: ";
        $repeat = "3";
        $totalRepeats = $repeat * 1;
        echo "<p>Chorus repeats: $totalRepeats times</p>";
        ?>
        </div>
</body>
</html>