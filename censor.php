<?php 
include_once "./head.php";
?>

<h1>Frase inviata</h1>
<div>
    <p class="text">
        <?php 
            echo $_POST['text'];
        ?>
    </p>
    <div class="n-words">
        <?php 
            echo strlen($_POST['text']);
        ?> 
    </div>
</div>
<h1>Parola da censurare</h1>
<div>
    <div>
        <?php 
            echo $_POST['censored-word'];
        ?>
    </div>
</div>
<h1>Frase censurata</h1>
<div>
    <p class="text">
        <?php 
            $censoredSentence = str_ireplace($_POST['censored-word'], ' *** ', $_POST['text']);
            echo $censoredSentence;
        ?>
    </p>
    <div class="n-words">
        <?php 
            echo strlen($censoredSentence);
        ?>  
    </div>
</div>

<?php
include_once "./foot.php";
?>