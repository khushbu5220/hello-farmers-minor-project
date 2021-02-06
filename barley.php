<!DOCTYPE html>
<html>
<head>
<title>Barley</title>
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
<h3>Barley</h3>
</div>
<nav>
<br>
<br>
<a href="https://www.accuweather.com/">
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
<p>Barley (Hordeum vulgare L.) is generally called Jau. It is quite significant cereal after wheat, maize & rice. Barley is cultivated in summer season in temperate area while it is sown in winter seasons in tropical zones. In India it is planted in rabi season. It possesses excellent drought resistance capacity.</p>
<br>
<div style="float:right" class="zoom"><img alt="barley" src="barley1.jfif"></div>

<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>Barley plants are cultivated on significant number of soil such as sodic, light & saline soil. Although, it gives good result in moderately heavy loam to sandy soils having neutral to saline response as well as moderate fertility. Acidic soils are not suitable for barley cultivation.</p>
</div>
<br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>Carry out ploughing 2-3 times properly to make the land weed free. Before sowing crop land must be properly prepared smooth till fine tilth. Ploughing should be followed by 2-3 harrowing to conserved moisture in soil. The stubbles and roots of earlier crop should be hand-picked up and dash out of the ground as it attracts termites.</p>
</div><br>

<button class="accordion" style="width:75%">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>S.NO.</th>
    <th>Fertilizer</th>
    <th>Quantity (per acre)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Urea</td>
    <td>55 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>75 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>Muriate of Potash</td>
  <td>10 kg</td>
  </tr>
  
</table>
<br><br>
<p><b>Nutrient Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>S.NO.</th>
    <th>Fertilizer</th>
    <th>Quantity (per acre)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Nitrogen</td>
    <td>25 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>12 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>6 kg</td>
  </tr>
</table><br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br>
  <button type="button">
<a href="https://www.indiamart.com/proddetail/organic-barley-fertilizer-19262369748.html" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Weather requirement</button>
<div class="panel">
  <p>Temperature: 12 - 32°C<br>Rainfall: 800-1100mm</p></div>
<br>

<button class="accordion">Varieties</button>
<div class="panel"><p>Barley is available in many different types and varieties all over the world. Some popular wheat varieties available and cultivated in India are as follows:</p>
<br>
<center>
<table style="width:50%">
<tr>
<th>S.No.</th>
<th>VARIETY</th>
<th>SPECIALITY</th>
</tr>
<tr>
<th>1.</th>
<th>PL 891</th>
<th>It is a huskless variety. Sattu, Flakes. Dalia, flour can be made from this variety. It gives an average yield of 16.8qtl/acre.</th>
</tr>
<tr>
<th>2.</th>
<th>PL 419</th>
<th>This variety suitable under rainfed condition. It has broad upright leaves. Plant height is 80 cm. Resistant to yellow rust and smuts has thin husked bold seeds. Matures in 130 days. Gives average yield of 14 qtl/acre.
</th>
</tr>
<tr>
<th>3.</th>
<th>PL172</th>
<th>Suitable for throughout Punjab state under irrigated condition. It is six row semi dwarf variety. Resistant to lodging. It is suitable for malting. It matures in 124 days. It gives average yield of 14 qtl/acre.</th>
</tr>
<tr>
<th>4.</th>
<th>PL 807</th>
<th> Medium broad and upright leaves. It is highly resistive to lodging. Ears are dense and erect. Grains are of medium and light yellow color. It is resistant to brown rust, yellow rust and loose rust. Ready to harvest in 137 days. Give average yield of 17.2 qtl/acre.
 </th>
</tr>
<tr>
<th>5.</th>
<th>HD 3171</th>
<th>Resistance to yellow, brown and black rusts both under natural and artificial epiphytotic conditions<br>•High yielding wheat variety with an average yield of 2.81 t/ha</th>
</tr>
<tr>
<th>6.</th>
<th>DWRB 123</th>
<th> It is suitable for making beer products. It gives an avergae yield of 19.4qtl/acre.</th>
</tr>
<tr>
<th>7.</th>
<th>DWRUB52</th>
<th>This variety is having profuse tillering. Plant height is about 101 cm. Ears are dense, erect, arrow shaped and of medium size. It is resistant to brown rust, yellow rust and loose rust, covered smut and leaf blight disease. Give average yield of 17.3 qtl/acre.
</th>
</tr>
<tr>
<th>8.</th>
<th>VJM 201</th>
<th>Two variety having narrow and upright leaves. Plant height is of 118 cm. this variety prone to less lodging. Ears are dense and tapered. Grains are bold and white with thin husk. It is resistant to brown rust, yellow rust and loose rust and stripe disease. It is suitable for brewing industry. Matures in 135 days. It gives average yield of 14.8 qtl/acre.
</th>
</tr>
<tr>
<th>9.</th>
<th>PL 426</th>
<th> It is semi dwarf variety, ready to harvest in 125 days. Suitable for cultivation under irrigated areas. It gives resistant to lodging, yellow rust, loose and covered smuts. Its grains are bold. It gives average yield of 14.5 qtl/acre.
</th>
</tr>
<tr>
<th>10.</th>
<th>BH 393</th>
<th> Suitable for Punjab and Haryana state. It is sown under irrigated and timely sown areas.</th>
</tr>
</table>
</center>
</div>
<br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Under irrigated conditions, use seed rate of 35 kg/acre and for rainfed conditions, use seed rate of 45 kg/acre.<br>

<b>Seed Treatment:</b>
To enhance the yield growth seeds should be treated with Bavistin@2 gm/kg to protect it from smut disease. It can be treated with Vitavax @2.5 gm/kg to prevent it from covered smut disease. To make seed termites free it should be treated with 250 ml Formothion in 5.3 ltr of water.
</p></div>
<br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
For optimum yield, complete sowing from 15 October to 15 November. If sowing get delayed yield will get declined.<br>

<b>Spacing:</b>
Use row to row spacing of 22.5 cm. In case of delay sowing, use spacing of 18-20 cm.<br>
 
<b>Sowing Depth:</b>
Use depth of 3-5 cm for crop under irrigated conditions and 5-8 cm depth for rainfed conditions.<br>

<b>Method of Sowing:</b>
For sowing use broadcasting and seed drill method.</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization –</b>Apply fertilizer dose of N:P:K@25:12:6 kg/acre in term of Urea@55 kg/acre, SSP@75 kg/acre and MOP@10 kg/acre.<br>
Apply full dose of phosphorus and potash at time of sowing as a basal application whereas give nitrogen dose before giving pre-sowing irrigation.
<br><br>
<b>Watering -</b>For barley, two or three irrigation are required during its life cycle. Avoid water stress during jointing, booting and heading stage. Moisture stress at this stage will lead to loss in yield. To optimize yield, soil moisture levels should remain above 50% of available moisture in the active root zone from seeding to the soft dough stage.
<br>Apply first irrigation at crown root initiation i.e 25 to 30 days after sowing. At panicle emergence stage applies second irrigation.
<br><br>
<b>Weeding -</b>In initial stage of crop, weed control is necessary to obtained good crop growth along with good yield. Broad and narrow leaves are two major weeds in barley. To control broad leaf weed, apply post emergence weedicide 2,4-D@250 gm/100 Ltr of water per acre, 30-35 days after sowing.
<br>To control narrow leaf weeds use Isoproturon 75%WP@500 gm/100 Ltr of water or Pendimethalin 30% EC@1.4 Ltr/100 ltr water for one acre. </p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
<b>Army worm:</b> Young larvae are light green in color they turn in later stage they become yellow color. They consumed Leaves from the edges or sometime completely. The clusters of egg are present on leaves appearing as a cottony or fuzzy. They are cyclic in nature showing 3 to 4 generation.
<br>
Control: Natural way to control armyworm is to allow the natural creatures that can parasitize the larvae which destroy the crops. Bacillus thuringiensis application is also beneficial for it.
<br>
When the symptoms are noticed take dusting of malathion 5% @10 kg/acre or quinalphos1.5% @250 ml/acre. After harvesting remove weeds and stubble.
<br>
<br>
<b>Stinkbug:</b>The bug is shield in shape and is either green or brown in color having yellowish red marking. These bugs bring pathogenic organism carrying in their mouth and cause severe infection to the plant. The eggs are laid on leaves in the cluster form.
<br>
Control: To eradicate the stink bug naturally is to eliminate weed all around the crops. Permethrin and bifenthrin are two pesticides which used carefully kill the pests.
<br><br>
<b>Aphids:</b> These are nearly transparent, soft-bodied sucking insects. When present in sufficient numbers, aphids can cause yellowing and premature death of leaves. Infestation usually occurs during second fortnight of January till crop.
<br>
Control: For Aphid, use chrysoperla predators.5-7 thousand/acre or use 50 gm/Ltr neem concentrate.  In cloudy weather infestation of aphid is occurred. Spray with Thiamethoxam or Imidacloprid 60 ml/acre in 100 Ltr of water.
<br><br>
<b>Wireworm:</b> They are light brown in color and there larval stage complete within 1-4 year. It damages seedling twist the stem and crown turns white in color.
<br>
Control: Post-emergent pesticide is not available for wireworm control. But seed can be treated pre-emergent Cruiser Maxx which contain Thiamethoxam @ 325 mL/100 kg of seeds.
<br><br>
<b> Disease and their control:</b><br>
<b>Powdery mildew:</b> Grayish white powdery growth appears on the leaf, sheath, stem and floral parts. Powdery growth later become black lesion and cause drying of leaves and other parts. The disease infects plants during periods of high humidity and cool to moderate temperatures. Low light intensity, which accompanies dry weather and a dense crop canopy, favours this disease.
<br>When incidence of disease is observed, spray with wettable sulphur@2 gm/Ltr of water or Carbendazim@ 200 gm/acre. In case of high incidence spray with Propiconazole@1 ml/Litre of water.
<br><br>
<b>Stripe/Yellow rust:</b> The ideal growth conditions for yellow rust are temperatures of between 8-13°C for spore germination and penetration, and 12-15°C for further development and with free water. The yield penalties from yellow rust can range from 5% to as high as 30% in high disease pressure scenarios. The pustules of stripe rust, which, contain yellow to orange-yellow urediospores, usually form narrow stripes on the leaves.
<br>For control of this disease, use rust resistant variety. Follow crop rotation and adopt mix cropping pattern. Avoid excess use of Nitrogen. When symptoms observed, do dusting of Sulphur@ 12-15 kg/acre or take spray of Mancozeb@2 gm/Ltr or spray the crop with Propiconazole (Tilt) 25 EC@1 ml/litre of water.
<br><br>
<b>Flag smut:</b> It is seed borne disease. Infection spread through wind. It is favoured by cool, humid conditions during flowering period of the host plant.
<br>Treat the seed with fungicides like carboxin 75WP@2.5 gm/kg of seeds, Carbendazim@2.5 gm/kg seed, Tebuconazole @1.25 gm/kg of seed if the disease level in the seed lot is high. If it is low to moderate, treat the seed with a combination of Trichoderma viride@4 gm/kg seed) and half the recommended dose of Carboxin (Vitavax 75WP) @1.25 gm/kg seed).
<br><br>
<b>Ear head bug:</b> Adults attack crop on milky stage. They feed on emerging panicle and produces chaffy grains with silky webs. Eggs are of shiny white color and found in cluster with orange hairs. Caterpillars are of brown colors with yellow band and minute hairs. Adults are of brownish color having fibrous forewings and yellowish hind wings.
<br>Control: To attract adult moth place light traps during day time. Place pheromone trap@5/acre at flowering stage until panicle stage. In case of severe infestation spray Malathion or Carbaryl@1 gm/Ltr of water.
<br><br>
<b>Thrips:</b> Mostly observed in dry weather.<br>
1) To check severity of thrips incidence, keep blue sticky traps@6-8 per acre. Also to reduce the incidence spray Verticillium lecani @ 5 gm/Ltr water.
<br>2) If incidence of thrips is more, then take spray of Imidacloprid 17.8 SL or Fipronil@2.5 ml/ltr water or Acephate 75% WP@2 gm/ltr or do drenching of Thiamethoxam 25% WG@1 gm/ltr of water.
<br><br>
<b>Grass hopper:</b> Nymphs and adults feeds on leaves. Nymphs are of whitish color with lines while adults are greenish brown in color with lines on body.
<br>Control: After harvesting remove all plant remains and follow proper sanitation, cleanliness in the field. Do ploughing after harvesting also in summer so that egg present in soil get exposed to sun and thus get destroyed. If infestation is observed spray with Carbaryl 50 WP@900 gm/acre.
</p></div><br>
<button type="button">
<a href="https://www.indiamart.com/golden-leaf-cropcare/agriculture-pesticides.html" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Crop matures at end of March or April depending upon variety use. To avoid over ripening avoid delay in harvesting. The right stage for harvesting is when moisture in grain reaches to 25-30%. For manual harvesting use serrate edge sickles. Store in dry place after harvesting.</p>
</div>
<br>
<div class="zoom">
<img alt="barley" src="barley2.jfif">
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
