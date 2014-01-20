LED-Matrix-Twitter-DigiX
================

Ported from https://github.com/FriedCircuits/LED_Twitter_Due

Searches Twitter for hashtag and then pushes to a queue. 

Depending on the number of Tweets calculates display time.

During each internval pops from the queue and updates message array to display on a 8x8 LED Matrix.

Hardware available on [https://www.tindie.com/stores/FriedCircuits/](https://www.tindie.com/stores/FriedCircuits/)

Notes:

Uses DigiFi WiFi library for the DigiX from DigiStump.com

Currently there is a bug with WiFi Server. It works without this function.
I want to add a function to remotely change search query via WiFi.
Depending on the order of starting the WiFi server it either hangs or never responds to a request. 


License: All source code and designs are released under 

Creative Commons NonCommercial-ShareAlike 

CC BY-NC-SA

![CC BY-NC-SA](http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png)

Please contact me for commercial opportunities. 