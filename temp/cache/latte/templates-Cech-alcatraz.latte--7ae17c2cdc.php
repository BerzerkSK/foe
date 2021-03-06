<?php
// source: D:\Programy\xampp\htdocs\foe\app\presenters\templates\Cech\alcatraz.latte

use Latte\Runtime as LR;

class Template7ae17c2cdc extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
		/* line 2 */
		$this->createTemplate('navody.latte', $this->params, "include")->renderToContentType('html');
?>
     <h1 style="text-align: center">Alcatraz - ako stavať jednotky efektívne.</h1>
     
<p style="text-align: justify">     
Alcatraz je VB, ktorá produkuje vojenské jednotky z vojenských budov postavených v meste. Pre CVC je ideálne potiahnuť Alcatraz aspoň na úroveň 10.
<br><br>
Po postavení alcatrazu si nechajte len 1 vojenskú budovu (ak máte skrýšu rogua, tak postavte aj túto budovu a nechajte si vyrobiť cca 50 rogue), ktorá Vám dovolí vyrábať jednotky určitého druhu,
najlepšie také, ktoré sú kľúčové pre danú éru (napríklad pre súčasnú sú to Protilietadlové vozidlá). Pokiaľ nepotrebujete stavať reálne jednotky v danej vojenskej budove, nemusíte ju ani dostavať
a dokonca ani pripojiť cestou k radnici. Stačí ju mať na lešení (len postaviť). Alcatraz bude vyrábať denne jednotky len z tejto budovy, kedže inú nemáte a teda budete mať denne rovnaké jednotky podľa úrovne Alcatrazu.
<br><br>
Po nazbieraní napr. 50 vojakov, budovu zrušte a postavte ďalšiu vojenskú budovu. Zopakujte to so všetkými vojensými budovami podľa toho o aké jednotky máte záujem.
<br><br>
Keď budete mať Alcatraz na vyššej úrovni (napr. 10), nechajte si okrem 1 vojenskej budovy aj skrýšu pre rogue (ak ju nemáte, snažte sa ju v eventoch zohnať lebo rogue potrebujete pri bojoch najviac).
<br><br>
Pri útočení stavajte najlepšiu jednotku (prípadne podľa toho, aké jednotky máte proti sebe lebo každá má nejaký bonus na inú jednotku) z Vašej éry (pripojenú alebo nepripojenú) a 7 x rogue, prípadne 2 rovnaké jednotky
a 6x rogue. Rogue Vám dáva výhodu jedného ťahu, nakoľko sa po zásahu mení na jednotku (bez toho aby sa mu znížili body zdravia), ktorú ste postavili k roguom.
<br>
<p style="text-align: justify">
<strong>Poznámka:</strong><br>Pokiaľ Vám reálnu jednotku zabijú a zostanú Vám len rogue (nepremenení), okamžite boj ukončite lebo ak sa rogue nemá na čo premeniť, po zásahu zmizne a zbytočne prídete o všetkých rogue, ktorých ste postavili
do útoku. V prípade, že sa už niektorý rogue premenil na jednotku a reálnu Vám zabijú, nie je to problém, lebo premenený rogue sa počas boja chová ako reálna jednotka a po skončení boja je z neho opäť rogue.
</p>

<p style="text-align: justify">
Preto je dobré ak máte rogue čo najviac.
<br><br>
Pri dobíjaní príbehových sektorov, kde získavate sektory so surovinami, rozšíreniami atď. NEPOUŽÍVAJTE rogue vôbec, nakoľko NPC jednotky na neho útočia len ak nemajô v dosahu reálnu jednotku. Ak útočíte v CE, na susedov
alebo CVC, rogue stavajte do útoku 6 alebo 7 podľa toho, či musíte poraziť 1 alebo 2 vlny obrany (v CE).
</p>
<?php
	}

}
