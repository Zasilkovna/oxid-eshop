<?php

    $sMetadataVersion = '1.0';
    $aModule = array(
        'id' => 'zasilkovna',
        'title' => 'Zásilkovna',
        'description'  => array(
            'cs' => 'Dopravní modul Zásilkovna. Návod na <a href="http://zasilkovna.cz/oxideshop" target="_blank">zasilkovna.cz/oxideshop</a>.',
            'sk' => 'Dopravní modul Zásilkovna. Návod na <a href="http://zasilkovna.cz/oxideshop" target="_blank">zasilkovna.cz/oxideshop</a>.',
            'en' => 'Transport module Zásilkovna. Instructions can be found on <a href="http://zasilkovna.cz/oxideshop" target="_blank">zasilkovna.cz</a>.'
        ),
        'thumbnail' => 'logo-cz.jpg',
        'version' => '1.4',
        'author' => 'Zásilkovna',
        'url' => 'http://www.zasilkovna.cz/oxideshop',
        'email' => 'technicka.podpora@zasilkovna.cz',

        'settings' => array(
            // Main
            array('group' => 'main', 'name' => 'zasilkovna_api_key', 'type' => 'str', 'value' => ''),
        ),

        'extend' => array(
            'payment' => 'zasilkovna/core/zasilkovnaPayment',
        ),
    );