<?php

echo preg_replace('#(ab{2,4}a)#', '!', 'aa aba abba abbba abbbba abbbbba'); //abba, abbba, abbbba
echo "\n";
echo preg_replace('#ab*a#', '!', 'aa aba abba abbba abca abea'); //aa, aba, abba, abbba
echo "\n";
echo preg_replace('#2\+3#', '!', '2+3 223 2223'); //2+3
echo "\n";
echo preg_replace('#a[^a]*a#', '!',  'aba accca azzza wwwwa');



