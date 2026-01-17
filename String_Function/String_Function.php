<?php
$schoolString = "HOLY ANGEL UNIVERSITY";
$nameString = "Gabriella Marie Magsino";
$sampleString = "I love PHP";
$advancedString = "I love HTML";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Functions</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>PHP String Functions</h1>
        <table>
            <tr><th colspan="2">Changing the Case of Characters</th></tr>
            <tr><td>Lowercase</td><td><?php echo strtolower($schoolString); ?></td></tr>
            <tr><td>Uppercase</td><td><?php echo strtoupper($schoolString); ?></td></tr>
            <tr><td>Capitalize First Letter</td><td><?php echo ucfirst(strtolower($schoolString)); ?></td></tr>

            <tr><th colspan="2">Counting Characters and Words</th></tr>
            <tr><td>Number of Characters</td><td><?php echo strlen($nameString); ?></td></tr>
            <tr><td>Number of Words</td><td><?php echo str_word_count($nameString); ?></td></tr>

            <tr><th colspan="2">Removing and Replacing Characters</th></tr>
            <tr><td>Trim Left</td><td><?php echo ltrim($sampleString); ?></td></tr>
            <tr><td>Trim Right</td><td><?php echo rtrim($sampleString); ?></td></tr>
            <tr><td>Trim Both</td><td><?php echo trim($sampleString); ?></td></tr>
            <tr><td>Replace (case-sensitive)</td><td><?php echo str_replace("PHP", "Java", $sampleString); ?></td></tr>
            <tr><td>Replace (case-insensitive)</td><td><?php echo str_ireplace("php", "Python", $sampleString); ?></td></tr>
            <tr><td>Repeat String</td><td><?php echo str_repeat("Hello ", 4); ?></td></tr>

            <tr><th colspan="2">Other Advanced Built-in Functions</th></tr>
            <tr><td>Split into Array</td><td><?php print_r(explode(" ", $advancedString)); ?></td></tr>
            <tr><td>Join Array into String</td><td><?php echo implode("-", explode(" ", $advancedString)); ?></td></tr>
            <tr><td>Pad String</td><td><?php echo str_pad("HTML", 10, "*", STR_PAD_BOTH); ?></td></tr>
            <tr><td>Chunk Split</td><td><?php echo chunk_split("HELLOPHP", 2, "-"); ?></td></tr>
            <tr><td>Convert to ASCII Value</td><td><?php echo ord("A"); ?></td></tr>
            <tr><td>Convert ASCII to Character</td><td><?php echo chr(66); ?></td></tr>
            <tr><td>Soundex (phonetic)</td><td><?php echo soundex("Angel"); ?></td></tr>
            <tr><td>Metaphone (advanced phonetic)</td><td><?php echo metaphone("University"); ?></td></tr>
            <tr><td>Similar Text %</td><td><?php similar_text("PHP", "php", $percent); echo $percent."%"; ?></td></tr>
        </table>
    </div>
</body>
</html>
