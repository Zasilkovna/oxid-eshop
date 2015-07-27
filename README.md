<h1>Modul pro Oxideshop</h1>
<h2>Instalace</h2>
<ol style="color: black; ">
  <li><a href="/soubory/oxideshop-module.zip">Stáhnout soubor modulu &raquo;</a></li>
  <li>
    Obsah zip archivu nakopírujte do kořenového adresáře vašeho obchodu oxideshop.<br>
  </li>
  <li>
    Přihlašte se do administrace, přejděte na stránku Extensions » Modules a modul aktivujte.
    <a href="https://cloud.githubusercontent.com/assets/13521096/8906702/f2e76584-3470-11e5-9e90-ca5f5f97becf.png"><img width="50%" src="https://cloud.githubusercontent.com/assets/13521096/8906702/f2e76584-3470-11e5-9e90-ca5f5f97becf.png"></a><br><br>
  </li>
  <li>
    Po aktivaci přejděte na panel <i>settings</i> a nastavte váš api klíč, který je: <code>41494564a70d6de6</code><br>
    <a href="https://cloud.githubusercontent.com/assets/13521096/8906703/f2e7bf20-3470-11e5-8fea-630b44aa952a.png"><img width="50%" src="https://cloud.githubusercontent.com/assets/13521096/8906703/f2e7bf20-3470-11e5-8fea-630b44aa952a.png"></a><br><br>
  </li>
  <li>
    Přidejte platební metody, které budou přiřazeny pouze dopravní metodě zásilkovna. 
    Ke každé takové platbě vložte do jejího popisu tento kod:<br> <code>&lt;p>[[Zasilkovna:connect-field=#branch_name_street country=cz]]&lt;/p></code><br> cz můžete nahradit za sk nebo pro povolení všech zemí u dané platby <code>country=cz</code> vymazat<br>
    <a href="https://cloud.githubusercontent.com/assets/13521096/8906704/f2eb66ac-3470-11e5-98b5-26623c252697.png"><img width="90%" src="https://cloud.githubusercontent.com/assets/13521096/8906704/f2eb66ac-3470-11e5-98b5-26623c252697.png"></a><br><br>
  </li>
  <li>
    Vytvořte dopravní metodu zásilkovna, ke které přidáte všechny platební metody z kroku 5.<br>
    <a href="https://cloud.githubusercontent.com/assets/13521096/8906706/f2ed8b80-3470-11e5-8ffa-924d9b4765af.png"><img width="70%" src="https://cloud.githubusercontent.com/assets/13521096/8906706/f2ed8b80-3470-11e5-8ffa-924d9b4765af.png"></a><br><br>
  </li>

  <li> Nyní je doprava přes zásilkovnu nabízena vašim zákazníkům. Cílová pobočka bude uvedena vždy v <strong>poznámce objednávky</strong>.<br>
    <a href="https://cloud.githubusercontent.com/assets/13521096/8906705/f2ed5b1a-3470-11e5-9c73-51f775f89525.png"><img width="70%" src="https://cloud.githubusercontent.com/assets/13521096/8906705/f2ed5b1a-3470-11e5-9c73-51f775f89525.png"></a><br><br>
  </li>
</ol>
<h2>Informace o modulu</h2>
<p>Podporované jazyky:</p>
<ul>
  <li>čeština</li>
  <li>angličtina</li>
</ul>
<p>Podporované verze:</p>
<ul>
  <li>Otestováno na verzi 4.6.5</li>
  <li>Při problému s použitím v jiné verzi nás kontaktujte na adrese <a href="mailto:technicka.podpora@zasilkovna.cz">technicka.podpora@zasilkovna.cz</a></li>
</ul>
<p>Poskytované funkce:</p>
<ul>
  <li>Přidání platebních metod, u kterých se dá vybírat cílová pobočka zásilkovny</li>  
  <li>Cílová pobočka je uvedena v poznámce objednávky</li>  
</ul>
