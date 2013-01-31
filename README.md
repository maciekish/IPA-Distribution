IPA-Distribution
================

IPA-Distribution allows extremely easy distribution of pre-signed ipa files to iDevices. IPA-Distribution generates all necessary files for the installation. *You only have to provide a properly signed ipa.*

The main focus is enterprise-signed apps, since they don't require provisioning for each device they will be installed on. This way, if you need to deploy an app to many devices, you can build the app once, sign it with an enterprise certificate, and distribute it via one simple link, no signup, no registration, no frills.

##Requirements
* A web-server with a PHP-version from this century (5.3+).
* Either [MBString](http://php.net/mbstring) or [Iconv](http://php.net/iconv)
* Either [BC](http://php.net/bc), [GMP](http://php.net/gmp) or [phpseclib](http://phpseclib.sourceforge.net/)
* Write permissions in `./files`
* One ore more prooperly-signed ipa-files (Ad-hoc or Enterprise).

##Usage (Basic)
1. Upload all the release files to a directory on your server.
2. Upload your ipa-files to the `./files` subdirectory.
4. Profit.

##Advanced Usage
If you want to serve different apps for different visitors, you can put your apps in subdirectories to `./files` instead of directly inside `./files`.

In this case, your directory structure should look like this:

    ./files/
           client1/
                    utility-app1.ipa
                    utility-app2.ipa
           client2/
                    game1.ipa
                    game2.ipa
                    
To install apps from the client1 subdirectory, browse to `index.php?f=client1`

##Security
IPA-Distribution is built to be extremely simple. It provides no security what so ever. If you need to protect your apps, you can add simple authentication via a `.htaccess` file.

##Credits
IPA-Distribution was developed by Maciej Swic.

[bootstrap](https://github.com/twitter/bootstrap) Copyright 2012 Twitter, Inc.

[CFPropertyList](https://github.com/rodneyrehm/CFPropertyList) by Rodney Rehm, Christian Kruse and Jarvis Badgley.

[IPA-Distribution](https://github.com/wbroek/IPA-Distribution) (sub-library, sorry for the naming-confusion) by Wouter van den Broek.

##License
Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.