<!DOCTYPE html>
<html>
<head>
<title>Dhalia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 350%;
background-image: linear-gradient(to left, #fff 80%, #2DF90E 20%);
}
.navsection{
width: 100%;  background-color: orange;
display: flex; justify-content: space-around;
align-item: center;
background-image: linear-gradient(to top, #fff 60%, #2DF90E 40%);
}
.logo{
width: 40%;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
color: #fff;
background-image: linear-gradient(#FFA500 40%, #FF8C00 60%);
padding-left: 100px;
box-sizing: border-box;
}
.logo h3{
text-transform: uppercase;
font-size: 1.5rem;
animation: aagepichhe 2s linear infinite;
animation-direction: alternate;
}
@keyframes aagepichhe{
from{ padding-left: 40%; }
to{ padding-right: 40%; }
}
nav{

width: 60%;
display: flex;
justify-content: space-around;
  border-color: #0000;
}
nav img{
border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ;
border: visible;
  display: inline-block;
  border-color: #000;
}
.translator {
text-align: right;
}
.accordion {
  background: linear-gradient(to bottom,blue,white);;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background: linear-gradient(to bottom,lightblue,white);
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

table , th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left; 
  }
  tr:nth-child(odd) {background-color: blueviolet;}
  tr:nth-child(even) {background-color: mediumslateblue;}
.container {
 color: #000;
 }
 .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white;
  color: black;
  border: 2px solid #FF69B4;
}

.button1:hover {background-color: #FF69B4;}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
p{ text-align:center;}
.zoom {
  padding: 50px;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
a {
	text-decoration: none;
}
</style>
</head>
<body>
<header>
<section class="navsection">
<div class="logo">
<h3>DHALIA</h3>
</div>
<nav>
<br>
<br><a href="https://www.accuweather.com/">
<img alt="wheather" src="wheather.jfif" width="70" height="70">
<br>Weather
</a>
<br>
</nav>
</section>
<h4 style="text-align: right;">Translate this page: &nbsp&nbsp</h4>

<div id="google_translate_element" class="translator"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript">
(function(){var gtConstEvalStartTime = new Date();/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='445303.2143855006';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<br><br>
<div style="float:right" class="zoom"><img alt="dahlia" src="dahlia1.jfif"></div>
<button class="accordion" style="width:75%"> PLANTING</button>
<div class="panel">
<b>  WHEN TO PLANT DHALIA</b>
<p>i.Donot be in a hurry to plant; dahlias will struggle in cold soil. Ground temperature should reach 60°F. Wait until all danger of spring frost is past before planting. (We plant them a little after the tomato plants go in.)<br>
ii.Some gardeners start tubers indoors in containers a month ahead to get a jump on the season. Medium to dwarf-size dahlias will do well in containers.<br>
iii.Order dahlia tubers in early spring. This gives gardeners in colder zones time to get them growing in a sunny window. Or, skip the potting and simply plant the tubers in the ground after the spring weather has settled and the soil has warmed.</p>
<br>
<b>CHOOSING AND PREPARING A PLANTING SITE</b>
<p>i.Select a planting site with full sun. Dahlias grow more blooms with 6 to 8 hours of direct sunlight. They love the morning sunlight best. Choose a location with a bit of protection from the wind.<br>
ii.Dahlias thrive in rich, well-drained soil. The pH level of your soil should be 6.5-7.0, slightly acidic.<br>
iii.If you have a heavier (clay) soil, add in sand, peat moss, or aged manure to lighten and loosen the soil texture for better drainage. <br>
iv.Large dahlias and those grown solely for cut flowers are best grown in a dedicated plot in rows on their own, free from competition from other plants. Dahlias of medium to low height mix well with other summer flowers. If you only have a vegetable garden, it is the perfect place to put a row of dahlias for cutting (and something to look at while you’re weeding!). </p>
<br>
<b>HOW TO PLANT DHALIA</b>
<p>i.Avoid dahlia tubers that appear wrinkled or rotten. Pink eyes (buds) or a little bit of green growth are good signs. Don’t break or cut individual dahlia tubers as you would potatoes.<br>
ii.Bedding dahlias can be planted 9 to 12 inches apart. The smaller flowering types, which are usually about 3 feet tall, should be spaced 2 feet apart. The taller, larger-flowered dahlias should be spaced 3 feet apart. If you plant dahlias about 1 foot apart, they make a nice flowering hedge and will support each other.<br>
iii.The planting hole should be slightly larger than the root ball of the plant and incorporate some compost or sphagnum peat moss into the soil. It also helps to mix a handful of bonemeal into the planting hole. Otherwise, do not fertilize at planting.<br>
iv.Dig a hole that’s about 6 to 8 inches deep. Set the tubers into it, with the growing points, or eyes, facing up, and cover with 2 to 3 inches of soil (some say 1 inch is adequate). As the stem sprouts, fill in with soil until it is at ground level.<br>
v.Tall, large-flowered cultivars will require support. Place stakes (five to six feet tall) around plants at planting time and tie stems to them as the plants grow.<br>
vi.Dahlias start blooming about 8 weeks after planting, starting in mid-July.<br>
vii.Do not water the tubers right after planting; this encourages rot. Wait until the sprouts have appeared above the soil to water.<br>
vii.Do not bother mulching the plants. The mulch harbors slugs and dahlias like the sun on their roots.</p>
</div>
<br>
 
<button class="accordion" style="width:75%">CARE</button>
<div class="panel">
 
 <p><b>Watering:</b><br>
  i.There is no need to water the soil until the dahlia plants appear; in fact, overwatering can cause tubers to rot. After dahlias are established, provide a deep watering 2 to 3 times a week for at least 30 minutes with a sprinkler (and more in dry, hot climates).<br>
ii.Like many large-flower hybrid plants, the big dahlias may need extra attention before or after rain, when open blooms tend to fill up with water or take a beating from the wind.
<br>
<br>
<b> Fertilizing:</b>
<p>Dahlias benefit from a low-nitrogen liquid fertilizer (similar to what you would use for vegetables) such as a 5-10-10 or 10-20-20. Fertilize after sprouting and then every 3 to 4 weeks from mid-summer until early Autumn. Do NOT overfertilize, especially with nitrogen, or you risk small/no blooms, weak tubers, or rot.
<br><br>
<b>Pinching, Disbudding, and Staking:</b><br>
i.When plants are about 1 foot tall, pinch out 3-4 inches of the growing center branch to encourage bushier plants and to increase stem count and stem length.<br>
ii.If you want to grow large flowers try disbudding—removing the 2 smaller buds next to the central one in the flower cluster. This allows the plant to put all of its energy into fewer but considerably larger flowers.<br>
iii.Bedding dahlias need no staking or disbudding; simply pinch out the growing point to encourage bushiness, and deadhead as the flowers fade. Pinch the center shoot just above the third set of leaves.<br>
iv.For the taller dahlias, insert stakes at planting time. Moderately pinch, disbranch, and disbud, and deadhead to produce a showy display for 3 months or more.
<br><br>
<b>Winter Care:</b><br>
i.Dahlia foliage dies back with the first light frost in fall. In colder regions, the tubers should be dug up before the first hard freeze and stored indoors.<br>
ii.Dahlias are hardy in USDA Hardiness Zone 8 and warmer and can simply be cut back and left in the ground to overwinter; cover with a deep, dry mulch. Further north, the tuberous roots should be lifted and stored during the winter.</p>
</div><br>


<button class="accordion" style="width:75%">PESTS/DISEASES</button>
<div class="panel">
<p>i.<b>Slugs and snails:</b> Bait 2 weeks after planting and continue to bait throughout the season.<br>
ii.<b>Mites:</b> To avoid spider mites, spray beginning in late July and continue to spray through September. Speak to your garden center about recommended sprays for your area.<br>
iii.<b>Earwigs and Cucumber Beetle:</b> They can eat the petals though they do not hurt the plant itself.<br>
iv.<b>Aphids</b><br>
v.<b>Deer:</b> Find a list of deer-resistant plants to grow around your dahlias.<br>
vi.<b>Powdery Mildew:</b> This commonly shows up in the fall. You can preventatively spray before this issue arises from late July to August.</p>
</div>
<br>


<button class="accordion">HARVEST/STORAGE</button>
<div class="panel">
<p><b>DAHLIA BOUQUETS</b>
Dahlias are beautiful in a vase. Plus, the more you cut them the more they will bloom. To gather flowers for a bouquet, cut the stems in the morning before the heat of the day and put them into a bucket with cool water. Remove bottom leaves from the stems and place the dahlias in a vase. Put the vase in a cool spot and check the water daily. The bouquet should last about a week.<br>
<b>DIGGING AND STORING DAHLIAS FOR WINTER</b>
Unless you live in a warmer region, you have to dig up dahlias in late fall before there is a hard frost in your area. Native to Mexico, Dahlias won’t survive freezing temperatures. Digging and storing dahlias is extremely easy and simple, and will save you the money that would otherwise go into buying new ones each year.<br>
If you live in an area where your ground doesn’t freeze, you don’t need to dig up your tubers. The general rule is: If you live in USDA Hardiness Zone 8 or warmer, you can leave dahlias in the ground. In Zone 6 or colder, dig them up. In Zone 7, you may be able to get away with just covering the plants with a thick layer of leaf or straw mulch, but if a freeze hits, you may lose them.<br>
<b>When to Dig Up Tubers</b>
Dig up dahlias before the first hard freeze. A light freeze (32°F / 0°C) will kill the foliage, but a hard freeze (28°F / -4°C) will kill the tubers, too. See your fall frost dates.<br>
A good indication of when to dig your tubers up is when the plant starts to turn brown and die back.<br>
<b>How to Dig Up Tubers</b>
Digging up tubers is easy:
i.After fall frost has killed back the foliage, cut the stems down to 2 to 4 inches.<br>
ii.Carefully dig around tubers with a pitchfork (or shovel) without damaging them.<br>
iii.Lift and gently shake the soil off the tubers.<br>
That’s it! Cut rotten tubers off the clump and leave the clumps outside in the sun upside down to dry naturally.<br>
<b>How to Store Dahlia Tubers</b><br>
i.Pack in a loose, fluffy material (vermiculite, dry sand, Styrofoam peanuts).<br>
ii.Store in a well-ventilated, frost-free place at around 45°F (7°C).<br>
<b>Re-planting Tubers in Spring</b><br>
In the spring, remove the tubers from their storage containers, separate healthy tubers from the parent clump, and plant in the garden. Each tuber must have at least one “eye” or a piece of the crown attached or it will not develop into a blooming plant. The eyes are located at the base of the stem and look like little pink bumps.</p>
</div>
<br>


<button class="accordion">RECOMMENDED VARIETIES</button>
<div class="panel">
<p>i.<b>Bishop of Llandaff:</b> small, scarlet, intense flowers with handsome, dark-burgundy foliage<br>
ii<b>Miss Rose Fletcher:</b> an elegant, spiky, pink cactus plant with 6-inch globes of long, quilled, shell-pink petals<br>
iii.<b>Bonne Esperance (Good Hope):</b> a foot-tall dwarf that bears 1-½-inch, rosy-pink flowers all summer that are reminiscent of Victorian bedding dahlias (though it debuted in 1948)<br>
iv.<b>Kidd Climax: </b>the ultimate in irrational beauty with 10-inch “dinnerplate” flowers with hundreds of pink petals suffused with gold<br>
v.<b>Jerseys Beauty:</b> a 7-foot tall pink plant with hand-size flowers that brings great energy to the fall garden.</p>
</div>
<br>
<div class="zoom">
<img alt="dahlia" src="dahlia2.jpg">

</div><br><br><br><br>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<br><br><br><br>
</header>
</body>
</html>
