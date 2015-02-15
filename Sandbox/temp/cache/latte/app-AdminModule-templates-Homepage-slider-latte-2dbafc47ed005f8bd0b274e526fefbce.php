<?php
// source: G:\xampp\htdocs\www\Sandbox\app\AdminModule/templates/Homepage/../@slider.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('1185448416', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block slider
//
if (!function_exists($_b->blocks['slider'][] = '_lb9c49105e03_slider')) { function _lb9c49105e03_slider($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><!--<img src="<?php echo Latte\Runtime\Filters::escapeHtmlComment($basePath) ?>/images/content/JP-KONTAKT_slider.png" alt="Slider" />-->
<!-- // SLIDER TEST -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; width: 610px; height: 235px;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:610px; height:235px; overflow: hidden;">
            <!-- Slide -->
            <div>
                <img u="image" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/content/slider_2.png" alt="Slider">
                <div u="caption" t="L|IB" style="position: absolute; top: 180px; left: 0px;
                    width: 610px; height: 50px;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 610px; height: 50px;
                        background-color: Black; opacity: 0.5; filter: alpha(opacity=50);">
                    </div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 610px; height: 50px;
                        color: White; font-size: 16px; font-weight: bold; line-height: 50px; text-align: center;">
                        Kancelářské křeslo za akční cenu
                    </div>
                </div>
            </div>
	    <!-- Slide -->
            <div>
                <img u="image" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/content/slider_2.png" alt="Slider">
                <div u="caption" t="L|IB" style="position: absolute; top: 0px; left: 435px;
                    width: 210px; height: 50px;">
                        <img u="image" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/content/akce_2.png" alt="Slider">
                </div>
		<div u="caption" t="L|IB" style="position: absolute; top: 115px; left: 0px;
                    width: 310px; height: 50px;">
                        <img u="image" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/content/cena.png" alt="Slider">
                </div>
            </div>
            <div>
                <img u="image" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/content/slider_2.png">
                <div u="caption" t="ZM*WVC|RT" t2="T" style="position: absolute; top: 0px; left: 435px;
                    width: 210px; height: 50px;">
                        <img u="image" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/content/akce_2.png" alt="Slider">
                </div>
		<div u="caption" t="ZM*WVC|RT" t2="T" style="position: absolute; top: 115px; left: 0px;
                    width: 210px; height: 50px;">                
                        <img u="image" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/content/cena.png" alt="Slider">
                </div>
            </div>
        </div>
    </div>
<!-- // SLIDER TEST END -->
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
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['slider']), $_b, get_defined_vars())  ?>

