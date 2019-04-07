<?php

echo preg_replace('#(ab{2,4}a)#', '!', 'aa aba abba abbba abbbba abbbbba'); //abba, abbba, abbbba
echo "\n";
echo preg_replace('#ab*a#', '!', 'aa aba abba abbba abca abea'); //aa, aba, abba, abbba
echo "\n";
echo preg_replace('#2\+3#', '!', '2+3 223 2223'); //2+3
echo "\n";
echo preg_replace('#a[^a]*a#', '!',  'aba accca azzza wwwwa');
echo "\n";
echo preg_replace('#a\d*a#', '!',  'a1a a22a a333a a4444a a55555a aba aca');
echo "\n";
echo preg_replace('#a\Wb#', '!',  'ave a#b a2b a$b a4b a5b a-b acb');
echo "\n";
echo preg_replace('#a[a-z]+a#i', '!',  'aAXa aeffa aGha aza ax23a a3sSa');



