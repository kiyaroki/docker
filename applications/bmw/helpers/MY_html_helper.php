<?php

    function bepaalAchtergrond($afbeelding)
    {
        return "<body background=\"" . geefVolledigeNaam($afbeelding) . "\">";
    }

    function toonAfbeelding($afbeelding, $attributen = '')
    {
        return "<img src=\"" . geefVolledigeNaam($afbeelding) . "\"" . _stringify_attributes($attributen) . " />";
    }

    function geefVolledigeNaam($afbeelding)
    {
        $CI =& get_instance();
        $CI->load->helper('url');
        return base_url() . str_replace('\\', '/', str_replace(FCPATH, "", APPPATH)) . $afbeelding;
    }
