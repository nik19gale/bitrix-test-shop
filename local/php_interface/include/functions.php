<?php
function dump($var, $die=false, $all=false)
{
    global $USER;

    if ($USER->isAdmin() || ($all == true))
    {
        ?>
        <pre style="background-color: black; color: white; font-size: 15px;"><? var_dump($var) ?></pre><br>
        <?
    }

    if ($die)
    {
        die();
    }
}