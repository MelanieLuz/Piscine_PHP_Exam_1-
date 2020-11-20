<?php
function rev_epur_str($caractere)
{
if ($caractere == FALSE)
return FALSE;

strrev (string ($caractere));
return $caractere;
}

var_dump(rev_epur_str(0, 4));
