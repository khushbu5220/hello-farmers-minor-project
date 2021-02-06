<!DOCTYPE html>
<html>
<head>
<title>Tea</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 650%;
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
<h3>TEA</h3>
</div>
<br>
<nav>
<br>
<br>
<a href = "https://www.accuweather.com/">
<img alt="weather" src="wheather.jfif" width="70" height="70">
<br> Weather
</a>
<br><br>
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

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script><br><br>
<p>Whilst there are many different types of tea available on the supermarket shelf, most originate from the Tea Plant, otherwise known as Camellia Sinensis variant Sinensis.<br>
Camellia sinensis is a hardy evergreen plant boasting glossy green, pointed and fragrant leaves. The appearance of delicate white flowers in the autumn means that this shrub has more to offer than just a refreshing cuppa. If you can grow other varieties of Camellia in your garden chances are you’ll be able to grow Camellia sinensis.</p><br>
<div style="float:right" class="zoom"><img alt="Tea" src="tea1.jfif"></div>
<button class="accordion"style="width:75%">Cultivation</button>
<div class="panel">
<p>Camellia sinensis likes an ericaceous soil in a bright, sheltered position but with partial shade. The soil should be free draining and so planting in pots is a great option giving even the smallest of gardens the chance to become a domestic tea plantation.<br>
Tea plants can grow to around 2 metres tall. When planting more than one sapling in the ground, leave a distance of 1.5 metres between the plants. This will give room for the plants to breathe and for them to become bushy.</p>
</div>
<br>
<button class="accordion"style="width:75%">Propagation of tea seeds</button>
<div class="panel">
<p>First, soak your tea seeds in water for between 24 and 48 hours. This allows the seeds to absorb as much water as it can and help to kick start the germination process. In general the seeds that sink give the highest chances of successful germination, although this is by no means guaranteed.<br>
Once removed from the water, place in a seed tray in a warm, sunny position and spray to keep damp. Allow the seeds to come back to air temperature and then cover over with an inch of coarse vermiculite.</p>
</div><br>
<button class="accordion"style="width:75%">Germination</button>
<div class="panel">
<p>Keep the soil moist and in a warm, sunny position, hopefully, germination will occur 6-8 weeks later. Once germination of your tea seeds has occurred and the plants have developed 3 or 4 leaves, it is time to separate them into pots using ericaceous compost.<br>
Move to a warm, but partially shaded position, spray regularly to keep the soil moist but not wet.</p>
</div>
<br>
<button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Rainfall</th>
  </tr>
  <tr style="background-color:magenta">
    <td>21-29°C</td>
    <td>150-200cm</td>
	</tr>
</table></center>
</div><br><br>
  <button type="button">
<a href="https://www.indiamart.com/proddetail/tea-gold-tea-crop-nutrition-16687447255.html" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br>
<br>
<button class="accordion">Cultivation</button>
<div class="panel">
<p>When the plant reaches about 20cm you can start hardening the plant off. Re-pot, giving the roots plenty of space for growth, continue to use ericaceous compost and make sure you add in good drainage, as tea plants like a lot of water but also need any excess to drain away to stop root rot. Place in a sheltered and partially shaded spot in the garden or on the patio, under the shadow of a small tree or large shrub.<br>
Tea plants need protecting from frost when young and it is advisable to bring them into a greenhouse or cool porch during the first two winters.<br>
Camellia sinensis takes 3 years to reach maturity but once the shrubs reach around 1m in height, they should be hardy enough to survive an English winter.<br>
Tea plants don’t really need a feed, just plenty of water, but if you do need to give them a feed, use an ericaceous food and do not harvest that plant for 12-20 days after the next flush, as the taste of the feed will come through the tea leaves.</p>
</div><br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphids (Tea aphid) Toxoptera aurantii</b><br>
<b>-Symptoms:</b>Small soft bodied insects on underside of leaves and/or stems of plant; usually green or yellow in color, but may be pink, brown, red or black depending on species and host plant; if aphid infestation is heavy it may cause leaves to yellow and/or distorted, necrotic spots on leaves and/or stunted shoots; aphids secrete a sticky, sugary substance called honeydew which encourages the growth of sooty mold on the plants<br>
<b>-Cause:</b>Insects<br>
<b>-Management:</b>If aphid population is limited to just a few leaves or shoots then the infestation can be pruned out to provide control; check transplants for aphids before planting; use tolerant varieties if available; sturdy plants can be sprayed with a strong jet of water to knock aphids from leaves; insecticides are generally only required to treat aphids if the infestation is very high - plants generally tolerate low and medium level infestation; insecticidal soaps or oils such as neem or canola oil are usually the best method of control; always check the labels of the products for specific usage guidelines prior to use<br><br>
ii.<b>Tea scale Fiorinia theae</b><br>
<b>-Symptoms:</b>Pale yellow spots on leaves; entire leaves yellowing; leaves turning brown and dropping prematurely; reduced flower size; adult insect is an oblong shape with a ridge down the center parallel to the sides; the scale is initially bright yellow in color but darkens to a dark brown; insect is mainly found on the undersides of leaves<br>
<b>-Cause:</b>Insect<br>
<b>-Management:</b>Light infestations can be scraped off the plant and destroyed or infested leaves can be hand picked; heavier infestations can be treated with a horticultural oil after bloom; appropriate insecticides can be applied but are only effective against scales that are actively crawling<br><br>
iii.<b>Spider mites (Two-spotted spider mite) Tetranychus urticae</b><br>
<b>-Symptoms:</b>Leaves stippled with yellow; leaves may appear bronzed; webbing covering leaves; mites may be visible as tiny moving dots on the webs or underside of leaves, best viewed using a hand lens; usually not spotted until there are visible symptoms on the plant; leaves turn yellow and may drop from plant<br>
<b>-Cause:</b>Arachnid<br>
<b>-Management</b>In the home garden, spraying plants with a strong jet of water can help reduce buildup of spider mite populations; if mites become problematic apply insecticidal soap to plants; certain chemical insecticides may actually increase mite populations by killing off natural enemies and promoting mite reproduction
<br>
<br>
<b> Disease and their control:</b><br>
i.<b>Algal leaf spot Cephaleuros virescens</b><br>
<b>-Symptoms:</b>Gray, green or tan raised spots or blotches with green margins on leaves<br>
<b>-Cause:</b>Algae<br>
<b>-Management:</b>Avoid overhead irrigation which can spread the disease; provide adequate space between plants to maximize air circulation around foliage; avoid wounding plants; prune out diseases parts of plants by cutting 6 inches below any visible symptoms; application of appropriate protective fungicides should be made in Spring when old leaves drop from plants<br><br>
ii.<b>Blister blight Exobasidium vexans</b><br>
<b>-Symptoms</b>Small, pinhole-size spots on young leaves; spots become transparent, larger, and light brown; blisters on underside of leaves; dark green, water-soaked zones surrounding blisters; blisters may be white and velvety or brown; young stems bent and distorted, may break off or die<br>
<b>-Cause:</b>Fungus<br>
<b>-Management:</b>Plant tea varieties which are less susceptible to the disease; apply appropriate foliar or systemic fungicides to protect the plants<br><br>
iii.<b>Camellia dieback and canker Glomerella cingulata</b><br>
<b>-Symptoms:</b>Leaves suddenly turning yellow and wilting; branch tips dying; gray blotches on bark and stem which develop into sunken areas (cankers); cankers girdling the stem; parts of plant above cankers losing vigor, wilting and dying; symptoms more pronounced during hot, dry weather<br>
<b>-Cause:</b>Fungus<br>
<b>Management:</b>Plant in well draining, acidic soils; remove diseased twigs by cutting several inches below cankered areas and disinfecting tools between cuts; apply appropriate protective fungicides during periods of wet weather or natural leaf drop to protect leaf scars from infection<br><br>
iv.<b>Camellia flower blight Ciborinia camelliae</b><br>
<b>-Symptoms:</b>Small, brown, irregular-shaped spots on the flower petals; whole flower turning brown; flowers dropping from plant<br>
<b>-Cause:</b>Fungus<br>
<b>-Management:</b><br>Remove all infected flowers from plants; remove all crop debris from around plants; soil drenches with appropriate fungicides can help to reduce the intensity of the disease<br><br>
v.<b>Horse hair blight Marasmius crinis-equi</b><br>
<b>-Symptoms:</b>Black threadlike structures resembling horse hair attached to upper branches of plant by small brown discs; leaves drop rapidly from plant<br>
<b>-Cause:</b>Fungus<br>
<b>-Management:</b>Remove a and destroy all crop debris from around plants; prune out infected or dead branches from the plant canopy<br><br>
vi.<b>Poria root disease (Red root disease) Poria hypolateritia</b><br>
<b>-Symptoms:</b>Yellowing foliage; wilting and/or sudden death of part of plant; withered leaves remain attached to the plant for several days; uprooting the bush reveals whitish mycelium and red discoloration of the roots<br>
<b>-Cause:</b>Fungus<br>
<b>-Management:</b>Remove any visibly infected bushes and any adjacent plants which are showing signs of yellowing; remove any stumps or trees within infested area; all living and dead roots which are about pencil thickness or more should be removed from the site by digging using a fork; all material collected should be destroyed by burning; bushes surrounding the infested area should be treated with an appropriate fungicide applied as a soil drench; cleared site should be planted with grass for a period of two years before tea is replante<br>
vii.<b>Root rot Phytophthora cinnamomi</b><br>
<b>-Symptoms:</b>Leaves turning yellow; poor plant growth; entire plant wilting; roots discolored; rapid death of plant<br>
<b>-Cause:</b>Oomycete<br>
<b>-Management:</b>Disease is difficult to manage once plants become infected so control methods should focus on protecting plants; always plant tea in well-draining soils which are not as favorable for the survival of the pathogen; application of appropriate fungicides can help to protect plants from infection
</p>
</div><br>
<br><button type="button">
<a href="https://www.indiamart.com/proddetail/insecticide-tea-bug-mosquito-12725346473.html" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Tea plants are generally dormant in Winter months. So Spring should bring evidence of new growth in the first ‘flush’ of tea shoots. Pluck the first two bright green leaves and the bud from each branch using finger and thumb, this should be easy to do with a gentle pluck. Regular harvesting like this encourages further growth and helps to create a more bushy shrub. These young, apple green leaves are then ready to be brewed into a calming cup of tea.<br>
Harvesting of the tea plant can occur several times throughout the more vigorous growing period of spring to summer, and this gives plenty of opportunity to try different methods of creating your preferred tea. The same plant, Camellia sinensis, gives rise to several different teas: Green Tea, Oolong Tea and Black Tea. The difference between them is down to the processes the leaves undergo once harvested.</p>
</div><br>
<button class="accordion">Green Tea Production Process</button>
<div class="panel">
<p><b>Step 1 - Harvest</b><br>
First, you need to select the leaves for harvest. In the spring and summer, you should notice a fresh 'flush' (a harvest in terms of tea is a flush) of young leaves and these are the perfect ones for tea making and the most prized by tea growers. Pick the two youngest leaves and the bud of each branch to give yourself a small pile of fresh soft leaves to work with.<br><br>
<b>Step 2 - Steaming</b><br>
The next step is to heat the leaves by steaming them. A steamer works best or you can use a colander over a pan of boiling water, steam for 1-2 minutes. You want the leaves to start to wilt and turn an olive green colour. Be careful when steaming that you don't cook the leaves and to do this watch their colour but also 'scrunch' them in their cloth. You should never have the bundles temperature so high that you can't carefully handle them and by feeling for them to go limp you'll know they are ready for the next step.<br><br>
<b>Step 3 - Shaping</b><br>
So now you're looking at a limp olive green ball of leaves, which is warm to touch but cool enough to knead, much the same as bread. If you're not keen in kneading the leaf, then using a sushi mat works well for this to get them nice and even, but you can also roll them in the palms of your hands - working them into narrow tubular shapes and as you do so, this breaks down the chemistry inside the leaf that will give your tea it's flavour.<br>
<b>NOTE: </b>The enzymes you are causing to react will, in turn, combine with the waxy outer surface to produce caffeine. If you want to make caffeine-free tea then remove the wax from the leaf before you start steaming.<br>
<b>Oxidation</b><br>
Oxidation is the chemical process that is easiest to observe by looking at a dried tealeafs colour. The greener the leaf, the less oxidized it is. Like a cut banana turning brown, the tea leaf turns brown as it oxidizes.<br>
White and Green teas are the least oxidized (as apparent in the light and green colour of the leaf and infusion). Black teas are the most oxidized (as you can see in the dark colour of the leaf and deep crimson-brown of the infusion).<br><br>
<b>Step 4 - Drying</b><br>
This part of the tea production process can be done in two different ways, Pan Frying or Oven Baking.<br>
<b>Drying By Pan Frying</b><br>
Dry the leaves in a pan by tossing them continuously and checking they don't burn with your hands. However, a warm oven would probably suit anyone not practised at such 'hands-on' cooking.<br>
<b>Drying By Oven Baking</b><br>
If using an oven, place the rolled leaves on a baking tray in a preheated oven at 100C for 10-12 minutes and turn them halfway through. Once again be careful not to burn them, then allow to cool down and dry out a bit further.<br><br>
<b>Step 5 - Enjoy Your Cup Of Home Grown Tea</b><br>
That's it the tea production process is complete - you've made Green Tea! Put the kettle on and look forward to your first homegrown/ homemade cup of tea. Green tea doesn't need to be hot however, so allow the water to cool for 3-4 minutes before brewing up.<br><br>
<b>Step 6 - Storing Leftover Tea Leaves</b><br>
The leaf you have leftover can be stored for the future and will mature in flavour over the coming week or two. Place your finished tea in an airing cupboard for another day or two until everything feels crisp, then store in an airtight container and store somewhere that doesn't let the light in.</p>
</div><br>
<button class="accordion">How to make Oolong Tea</button>
<div class="panel">
<p>To make Oolong Tea simply place the freshly harvested leaves and buds on a tray in the sun for 24 hours, allowing them to wilt, or 'wither', before following the instructions for Green Tea Production.
</p>
</div><br>
<button class="accordion">How to make Black Tea</button>
<div class="panel">
<p>For Black Tea, roll the leaves as soon as they have been plucked and then leave to dry in the sun for up to 3 days. Then follow the same instructions for Green Tea Production. The oxidation that occurs when the leaves are lying out, will create a stronger flavour and darker colour to the final brew.<br>
Thanks to their expert Tea knowledge and photos of the Green Tea production process.</p>
</div><br>
<button class="accordion">Top 10 Tea Facts</button>
<div class="panel">
<p>1.If it’s not from the Camellia sinensis plant – it is not strictly speaking tea! Nowadays a lot of what is called TEA is actually blends of flowers and herbs – herbal infusions to be accurate.<br>
2.Although there are some 2000 or so varieties of tea, it is not the plant that differs, but the way it is grown, where it is grown and what happens to it after the leaves have been picked.<br>
3.Tea if often treated to alter and create new flavours. Popular treatments include spraying with oil, smoking and adding flowers to the blend.<br>
4.It is thought tea was discovered by accident in China as an Emperor allowed some leaves to remain in a pot of boiling water - which in turn created the brew! And that was over 2000 years ago!<br>
5.The average person in the United Kingdom drinks as much tea as 23 Italians.<br>
6.40% of all fluid drunk in Britain every day is tea.<br>
7.After a 5 year study it was found that volunteers who drank 375ml of black tea per day had a 43% reduction in the risk of having a heart attack and a 70% reduced risk of having a fatal heart attack.<br>
8.As a nation we enjoy drinking tea on a daily basis, getting through 165 million cups a day.<br>
9.The main tea growing regions of the world are India, Sri Lanka, China, Japan, Taiwan and Africa.<br>
10.Some climatologists believe that as a result of climate change, one day the Scottish Highlands will be the ideal place to grow and harvest tea.</p>
</div><br>
<div class="zoom">
<img alt="Tea" src="tea2.jfif">
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
</header>
</body>          
</html>  