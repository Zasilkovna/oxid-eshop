<?php
    class zasilkovnaPayment extends zasilkovnaPayment_parent{
        private $apiKey;

        public function __construct(){
            parent::__construct();

            // Načtení klíče API
            if(class_exists('oxRegistry')) {
                $this->apiKey = oxRegistry::getConfig()->getConfigParam('zasilkovna_api_key');
            } else {
                $this->apiKey = $this->getConfig()->getConfigParam('zasilkovna_api_key');
            }

            // Kompatibilita
            $smarty = $this->getSmarty();
            $smarty->_tpl_vars['oxidBlock_pageScript'][] = '<script type="text/javascript" src="/modules/zasilkovna/js/script.js"></script>';
            $smarty->_tpl_vars['oxidBlock_pageScript'][] = '<div class="packetery-branch-list list-type=7"><script> window.packeteryForceOwnJQuery = true; (function(d){ var el, id = "packetery-jsapi", head = d.getElementsByTagName("head")[0]; var lh = location.href;  el = d.createElement("script"); el.id = id; el.async = true; el.src = "http://www.zasilkovna.cz/api/'.$this->apiKey.'/branch.js?callback=addHooks"; head.insertBefore(el, head.firstChild); }(document)); </script></div>';

            $smarty->_tpl_vars['__zasilkovna__'] = array();
            $smarty->_tpl_vars['__zasilkovna__'][] = '<script type="text/javascript" src="/modules/zasilkovna/js/script.js"></script>';
            $smarty->_tpl_vars['__zasilkovna__'][] = '<div class="packetery-branch-list list-type=7"><script> (function(d){ var el, id = "packetery-jsapi", head = d.getElementsByTagName("head")[0]; var lh = location.href;  el = d.createElement("script"); el.id = id; el.async = true; el.src = "http://www.zasilkovna.cz/api/'.$this->apiKey.'/branch.js?callback=addHooks"; head.insertBefore(el, head.firstChild); }(document)); </script></div>';

            // Poznámka
            if($_POST['fnc'] == 'validatepayment' ){
                $note = oxSession::getVar('ordrem');
                $branch = "";
                if(isset($_POST['branch_name_street'])){
                    $branch = $_POST['branch_name_street'];
                }
                $note = preg_replace('/\[Zásilkovna\s*;\s*[0-9]+\s*;\s*[^\]]*\]/', '', $note);
                $note = $branch.' '.$note;
                oxSession::setVar('ordrem',$note);
            }
        }

        /**
         * Objekt Smarty
         *
         * @return object Šablonovací systém
         */
        private function getSmarty(){
            return oxUtilsView::getInstance()->getSmarty();
        }
    }