<?php
// source: G:\xampp\htdocs\www\Sandbox\app\AdminModule/templates/Homepage/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('7807252605', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block metaKeywords
//
if (!function_exists($_b->blocks['metaKeywords'][] = '_lbc1bdd8e61d_metaKeywords')) { function _lbc1bdd8e61d_metaKeywords($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Klíčová slova<?php
}}

//
// block metaDescription
//
if (!function_exists($_b->blocks['metaDescription'][] = '_lb86cad6795f_metaDescription')) { function _lb86cad6795f_metaDescription($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Popisek<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbcbbad3793a_content')) { function _lbcbbad3793a_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="top-case">
          
          <div id="top">
          
              <div id="logo">
                  <a href="index.php" title="Kliknutím přejdete na úvodní stranu">
                      <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/admin/lsystems-cms-logo.png" alt="Lsystems CMS ver. 1.0" width="274" height="61">
                  </a> 
              </div>

              <div id="log-info">
                  <p id="log-menu">
                      <!--<a href="#" title="Změna nastavení účtu">Změna nastavení</a>-->
                      <a class="log-menu-border" href="./../logout.php" title="Odhlášení z administračního systému">Odhlásit se</a>
                  </p>
                  <p id="log-user-info">
                      
                  </p>
              </div> 
                
          </div>
          
      <div class="clear"></div>
          
      </div>
<div id="main-case">
      
          <div id="main">
            <div id="top-content">

                <h1>Lsystems CMS ver. 1.00 - Kompletní správa Vašeho webového obsahu</h1>
                <div id="modul-wrap">

                    <div id="users-modul">
                        <a class="modul-title" href="index.php?page=editace_uzivatel-seznam-registr" title=""><strong>ZÁKAZNÍCI</strong>Správa zákaznických účtů, souhlas s newsletterem.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=editace_uzivatel-seznam-registr" title="Registr">Seznam zákazníků</a></li>
                        </ul>
                    </div>
										
										<div id="news-modul">
                        <a class="modul-title" href="index.php?page=novinky-seznam" title=""><strong>NOVINKY</strong>Psaní novinek a&nbsp;aktualit včetně obrázků.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=novinky-seznam" title="Seznam všech novinek">Seznam novinek</a></li>
                            <li><a href="index.php?page=novinky-nova-strana" title="Vytvoření nové novinky">Nová novinka</a></li>
                        </ul>
                    </div>
                    
                    <!--<div id="eshop-modul">
                        <a class="modul-title" href="#" title=""><strong>E-SHOP</strong>Kompletní správa internetového obchodu.</a>
                        <ul class="modul-menu">
                            <li><a href="#" title="#">Produkty</a</li>
                            <li><a href="#" title="#">Výrobci</a></li>
                            <li><a href="#" title="#">Objednávky</a></li>
                            <li><a href="#" title="#">Zákazníci</a</li>
                            <li><a href="#" title="#">Doprava a platba</a</li>
                            <li><a href="#" title="#">Exporty na internet</a></li>
                        </ul>
                    </div>-->

                    <!--<div id="seo-modul">
                        <a class="modul-title" href="index.php?page=editace_seo-seznam" title="SEO"><strong>SEO</strong>Nastavení parametrů důležitých pro&nbsp;vyhledávače.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=editace_seo-seznam" title="Seznam všech stránek">Seznam stránek</a></li>
                        </ul>
                    </div>-->

                    <div id="edit-modul">
                        <a class="modul-title" href="index.php?page=editace_obsahu-seznam" title="EDITACE OBSAHU"><strong>EDITACE OBSAHU</strong>Úprava obsahu webových stránek.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=editace_obsahu-seznam" title="Seznam všech stránek webové prezentace">Seznam stránek</a></li>
                            <li><a href="index.php?page=editace_obsahu-nova-strana" title="Vytvoření nové stránky">Vytvoření stránek</a></li>
                        </ul>
                    </div>

                    <div id="gallery-modul">
                        <a class="modul-title" href="index.php?page=galerie-kategorie-seznam" title=""><strong>GALERIE</strong>Správa galerií, přidávání nových foto.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=galerie-kategorie-seznam" title="Seznam galerii">Seznam galerii</a></li>
                            <li><a href="index.php?page=galerie-nova-strana" title="Přidání nových fotografií">Přidání nových fotografií</a></li>
                        </ul>
                    </div>

                    <!--<div id="investice-modul">
                        <a class="modul-title" href="index.php?page=investice-seznam" title=""><strong>Investice</strong>Seznam investic včetně příloh.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=investice-seznam" title="Seznam všech novinek">Seznam investic</a></li>
                            <li><a href="index.php?page=investice-nova-strana" title="Vytvoření nové novinky">Nová investice</a></li>
                            <li><a href="index.php?page=investice-nova-kategorie" title="Vytvoření nové kategorie">Nová kategorie</a></li>
                        </ul>
                    </div>-->

                    <div id="eshop-modul">
                        <a class="modul-title" href="index.php?page=eshop-seznam" title="E-SHOP"><strong>E-shop</strong>Kompletní správa internetového obchodu.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=eshop-seznam" title="Produkty">Produkty seznam</a></li>
                            <li><a href="index.php?page=eshop-nova-strana" title="Produkty">Nový produkt</a></li>
                        </ul>
                    </div>

                   <div id="fakturace-modul">
                        <a class="modul-title" href="index.php?page=fakturace-hlavni" title=""><strong>FAKTURACE</strong>Seznam objednávek z eshopu.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=fakturace-hlavni" title="Seznam objednávek">Seznam objednávek</a></li>
                        </ul>
                    </div>
                 
                    <!--<div id="download-modul">
                        <a class="modul-title" href="index.php?page=download-seznam" title=""><strong>DOWNLOAD</strong>Správa souborů určených ke&nbsp;stažení.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=download-seznam" title="Seznam souborů ke stažení">Seznam souborů</a></li>
                            <li><a href="index.php?page=download-novy-soubor" title="Nahrání nového souboru">Přidání přílohy</a></li>
                        </ul>
                    </div>
                    
                    <div id="eshop-modul">
                        <a class="modul-title" href="index.php?page=sluzby-seznam" title=""><strong>SLUŽBY V OBCI</strong>Správa služeb a&nbsp;jejich funkcí.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=sluzby-seznam" title="Seznam služeb">Seznam služeb</a></li>
                            <li><a href="index.php?page=sluzby-novy-soubor" title="Přídání nové služby">Přídání nové služby</a></li>
                        </ul>
                    </div>-->
                    
                    <!--<div id="forum-modul">
                        <a class="modul-title" href="index.php?page=forum-seznam" title=""><strong>Fórum</strong>Diskuzní fórum na webu.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=forum-seznam" title="Seznam všech témat">Seznam témat</a></li>
                        </ul>
                    </div>-->
                    
                    <div id="forum-modul">
                        <a class="modul-title" href="index.php?page=editace_obsahu-reference" title=""><strong>REFERENCE</strong>Ohlasy zákazníků.</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=editace_obsahu-reference" title="Seznam všech referencí">Seznam referencí</a></li>
                            <li><a href="index.php?page=editace_reference-nova-strana" title="Nová reference">Nová reference</a></li>
                        </ul>
                    </div>
                    
                    <!--<div id="manual-modul">
                        <a class="modul-title" href="index.php?page=uredni-deska" title=""><strong>Úřední deska</strong>Seznam souborů na úřední desce</a>
                        <ul class="modul-menu">
                            <li><a href="index.php?page=uredni-deska" title="Seznam všech témat">Úřední deska</a></li>
                        </ul>
                    </div>-->
                    
                    <h2>Moduly administračního systému</h2>
                </div>
          </div>  
            <div id="tips-wrap">
                  <h3>Časté otázky uživatelů a odpovědi</h3>
                  <a href="#" title="Kliknutím zobrazíte odpovědi" id="tips-answer-slide-btn" class="tips-btn">Ukázat odpovědi</a>
                  <div id="tips">
                      <div class="tips1">
                      <h4>Funkce CMS Lsystems</h4>
                      <p>Zajímají Vás změny v nové verzi Lsystems CMS 1.0? Pak budete mile překvapeni!</p>
                      </div>
                      <div class="tips2">
                      <h4>Rozšiřitelnost CMS</h4>
                      <p>Chcete rozšířit Váš administrační systém o další moduly a zvýšit tak jeho funkčnost?</p>
                      </div>
                      <div class="tips3">
                      <h4>Technická podpora</h4>
                      <p>Máte dotaz ohledně práce s CMS Lsystems CMS 1.0 nebo se nás chcete jen na cokoliv zeptat?</p>
                      </div>
                  </div>
                  <div id="tips-answer">
                        <div>
                              <p>Lsystems CMS 1.0 obsahuje kompletně nové uživatelské rozhraní, a to jak graficky, tak i po funkční stránce. Práci s tímto CMS zvládne opravdu každý!</p>
                        </div>
                        <div>
                              <p>Může se stát, že budete ve Vašem CMS potřebovat nové funkce a moduly. To ovšem není vůbec žádný problém.</p>
                              <p>Nová verze CMS je připravena na další rozšíření o jednotlivé moduly a Vy tak získáte nové funkce pro Váš web nebo internetový obchod.</p>
                        </div>
                        <div>
                              <p>Pokud budete mít jakýkoliv dotaz nebo narazíte na problém při práci s CMS, neváhejte nás <a href="http://lsystems.cz/kontakt.php" title="Kontaktní informace společnosti Lsystems">kontaktovat</a>. Rádi zodpovíme Vaše dotazy a budete se snažit Vám rychle pomoci.</p>
                        </div>
                  </div>

                  

              </div>     
          
              <div class="clear"></div> 
              
          </div>
      
      </div>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
$_b->templates['7807252605']->renderChildTemplate('../@slider.latte', $template->getParameters()) ;if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['metaKeywords']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['metaDescription']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 