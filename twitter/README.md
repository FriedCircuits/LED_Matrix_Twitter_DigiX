LED-Matrix-Twitter-DigiX
================

PHP gateway for Twitter API 1.1

This off loads microcontrollers from having to do OAUTH and can handle parsing tweets. 

Just fill in your tokens and secrets keys.

Library from(copied here for reference):

http://github.com/j7mbo/twitter-api-php

If you have IIS uncomment this line

CURLOPT_SSL_VERIFYPEER => false

in

performRequest() in the options array

https://github.com/J7mbo/twitter-api-php/issues/32

There should be a way to get it to work with true since false is a bad idea.

Referances:

https://dev.twitter.com/discussions/15078

http://stackoverflow.com/questions/12916539/simplest-php-example-for-retrieving-user-timeline-with-twitter-api-version-1-1/

https://dev.twitter.com/docs/api/1.1/get/search/tweets

http://webtutsdepot.com/2009/08/31/how-to-read-json-data-with-php/




License: All source code and designs are released under 

Creative Commons NonCommercial-ShareAlike 

CC BY-NC-SA

![CC BY-NC-SA](http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png)

Please contact me for commercial opportunities. 