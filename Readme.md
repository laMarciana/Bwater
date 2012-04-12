#Bwater
As water, this wordpress theme is 100% fluid-width. Bwater will look great in virtually any screen resolution or font size. Bwater is designed and developed following a fluid grid system and a fluid baseline rhythm. It uses pure HTML5 and CSS3, microformats included. It is as well translation ready and ready to work with a right-to-left language. You can configure it to use with a single column or with an additional right sidebar where you can put any widget. It's also possible to have a custom menu. Bwater works fine in any modern browser.

##Setup
You can get Bwater, in zip format, from this URL: [https://github.com/laMarciana/bwater/zipball/master](https://github.com/laMarciana/bwater/zipball/master)

To install it follow [setup instructions described in wordpress site](http://codex.wordpress.org/Using_Themes#Adding_New_Themes).

##Customization
Bwater uses pure HTML5 and CSS3, you need to know these languages to customize it. 

Bwater is designed as a fluid grid system. You can learn about it reading this [article about fluid grids in A List Apart](www.alistapart.com/articles/fluidgrids/).

It also uses a baseline rhythm system. You can learn about it reading this [article about fluid rhythm in A List Apart](http://www.alistapart.com/articles/settingtypeontheweb).

Bwater is 100% fluid, both horizontally and vertically. If you look at the CSS source code, you'll see this is fully commented to help customization. Everywhere you see `CBW`, it stands for *containing block width* and it is used to calculate percentage horizontal values. Where it says `RFS`, it stands for *relevant font size* and it is used to calculate em values.

##Localization
Bwater already comes translated in three languages: english, spanish and catalan. If you need to translate it into another language you can read this [tutorial in how to localize a wordpress theme](http://www.solostream.com/blog/tutorials/translate-wordpress-theme/). Please, if so, give us feedback to include the translation in next release.

##Right-to-left languages
Bwater is already prepared to be used with right-to-left (rtl) languages. If you download wordpress in a rtl language then everything will work automatically. If instead you downloaded wordpress in a left-to-right language, be sure to update your language configuration in `wp-config.php` and to copy the language file located in `wp-content/language` in the rtl language wordpress package (for example, `wp-content/language/ar.php`) in your wordpress setup.
