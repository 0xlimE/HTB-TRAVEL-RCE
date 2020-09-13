# HTB-TRAVEL-RCE
I made a script to get remote code execution on the box 'Travel' on hackthebox, I was particularly proud of this script since the exploit chain was so long.

The attack chain is:

* The underlying technology is wordpress using a plugin called simplepie, simplepie will use memcached to cache RSS feeds.
* I can inject a custom RSS feed by referencing my own .xml file when making a request to the server.
* By using a SSRF I can access memcache and put my own poisonous .php file on the server, utilizing unsafe php deserialization I can place a php reverse shell on the box.
* when I then request specifically this file, it will find it in the memcached and deserialize it, putting my reverse shell on the box.

 
