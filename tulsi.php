<!DOCTYPE html>
<html>
<head>
<title>Tulsi</title>
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
<h3>TULSI</h3>
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

<p>The botanical name of Tulsi is Ocimum sanctum. Tulsi is a domestic plant and is grown widely in India. It is also known by its different names at different places like Holy Basil in English, Thulasi in Tamil, Tulasi in Punjabi, Imli in Urdu etc. Tulsi is worshipped by people. Tulsi is known for its medicinal values, antimicrobial and antiviral properties which helps in purifying the air. Drugs obtained from Tulsi are used to cure stress, fever, decreases inflammation and increases stamina. It is an annual shrub with average height of 2 to 4 feet. Flowers are small and purple in color. It is found throughout in India but in MP it is found commonly.</p><br>
<div style="float:right" class="zoom"><img alt="tulsi" src="tulsi1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It is grown in vast array of soil. Avoid cultivation in highly saline, alkaline or water logged conditions are not good for its yield. It gives best result when grown under well drained soil with good organic matter. Soil ranging from pH 5.5-7 suits best for its growth. </p>
</div>
<br>
<button class="accordion" style="width:75%">Land Preparation</button>
<div class="panel">
<p>For Tulsi plantation, it requires well drained soil. To bring soil to fine tilth, plough and harrow land several times, then FYM is mixed well in soil. Transplantation of Tulsi is done on fine seed bed. </p>
</div>
<br>
<button class="accordion" style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Prepare nursery beds in the third week of February.
<br>
<b>Spacing</b><br>
Depending upon its growth habit, prepare seed beds of 4.5 x 1.0 x 0.2m size. Seeds should be sown at a distance of  60 cm by 60 cm.
<br> 
<b>Sowing Depth</b><br>
Seeds are sown at depth of 2cm.<br>
<b>Method of Sowing</b><br>
Crop is transplanted in field, 6-7 week after sowing.
<br></p>
</div>
<br>
<button class="accordion" style="width:75%">Seed</button>
<div class="panel">
<p><b>Seed Rate:</b><br>
For Tulsi plantation use seed rate of 120 grams per acre.
<br>
<b>Seed treatment:</b><br>
To protect crop from soil borne disease and pests, before sowing treat seeds with Mancozeb@5gm/kg of seeds.</p>
</div>
<br>
<button class="accordion">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Rainfall</th>
	<th>Harvesting Temperature</th>
	<th>Sowing Temperature</th>
  </tr>
  <tr style="background-color:magenta">
    <td>14-30°C</td>
    <td>80-120cm</td>
	<td>25-35°C</td>
    <td>15-25°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Nursery Management and Transplanting</button>
<div class="panel">
<p>Before sowing add 15 tonnes of FYM in soil for good yield. Sow Tulsi seeds on prepared beds with convenient space. Seeds are sown on beds 8 weeks in advance of monsoon. The seeds are sown at the depth of 2cm. After sowing, thin layer of FYM and soil is spread over seeds. Irrigation is done with sprinkler hose.  
<br>15-20 days before transplanting, application of 2% urea solution helps to give healthy seedlings for transplantation. Transplanting is done in the middle of April when seedlings are 6 weeks old and having 4-5 leaves on seedlings. Water seedling beds 24hours before transplanting so that seedlings can be easily uprooted and remain turgid at transplanting time.</p></div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
    <th>Urea</th>
    <th>SSP</th>
	<th>MURIATE OF POTASH</th>
  </tr>
  <tr>
    <td>104</td>
    <td>150</td>
    <td>40</td>
  </tr>
</table>
<br><br>
<b>Nutrient Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
    <th>NITROGEN</th>
    <th>PHOSPHORUS</th>
	<th>POTASH</th>
  </tr>
  <tr>
    <td>48</td>
    <td>24</td>
    <td>24</td>
  </tr>
</table>
</center>
<br> 
<p>At the time of land preparation, apply FYM i.e. farmyard manure and mix well with soil. Apply fertilizer dose in the form of Nitrogen@48kg and Potash@24kg and Phosphorus@24kg/acre in form of Urea@104kg, MOP@40kg and SSP@150kg/acre. Apply half dose of nitrogen and full dose of phosphate pentoxide applied as a basal dose, apply it at the time of transplanting. Mn@50ppm conc. and Co@100ppm conc. are applied as micronutrients. Remaining dose of Nitrogen is applied in 2 split after first and second cutting.
</p>
</div>
<br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>In summer, apply 3 irrigation per month and in rainy season, no irrigation is required. 12-15 irrigations should be given in one year. First irrigation should be given after transplanting and then second irrigation is given during seedling establishment. These two irrigations must be given and then depending upon season rest of irrigations is done.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Do weeding and hoeing to keep the field free from weed. If weed left uncontrolled then it will reduce the growth of crop. In the beginning weeding is done after one month after planting along with the second four weeks after the first. Just one hoeing after two months of planting is ideal.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Leaf rollers:</b>Caterpillars feed themselves on leaves, buds and crops. They seal the surface of leaves and make them roll or fold.
<br>To control leaf roller, spray with 300ml Quinalphos in 150 ltr water per acre. <br><br>
<b>Tulsi lace wing:</b> Nymphs feed on leaves and leave excreta which is are not good for leaves. In initial stages leaves get curls and then whole plant gets dried.
<br>To control lace wings, spray with Azadirachtin 10,000 ppm conc.@5ml/Ltr of water.<br><br>
<b>Disease and their control:</b><br>
<b>Powdery Mildew:</b>Fungus that produces powder on leaves and affects wide range of plant.<br>
To get rid of this disease, spray with mancozeb@4gm/ltr of water <br><br>
<b>Seedling blight:</b><br>
<br>It is a fungal infection that causes seed or seedling to die.
<br>To control seedling blight, do managed phyto-sanitary method.<br><br>
<b>Root rot:</b> The roots of the plant get rot because of poor drainage system. it is also get prevent by managed Phytosanitary method.
<br>Seedling blight and Root rot both are also prevented by drenching the nursery beds with Bavistin @1%.
<br><br></p>
</div>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Plants start yielding by 3 months after transplantation. Harvesting is done when there is full blooming period. For further regeneration of branches cutting should be done when plant is at least 15cm above the ground.  Leaves are used fresh or it is sun dried for future use.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting, drying of leaves is done. Then steam distillation is done to obtain Basil oil. For transportation it is packed in airtight bags. Leaves should be stored in dry places. From herb several products like Panch Tulsi oil, Tulsi Ginger, Tulsi Powder, Tulsi Tea and Tulsi Capsules are made after processing. </p>
</div><br>
<div class="zoom">
<img alt="tulsi" src="tulsi2.jpg">

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
