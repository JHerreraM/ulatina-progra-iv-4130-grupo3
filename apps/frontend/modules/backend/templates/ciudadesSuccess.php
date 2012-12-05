<?php
    $sf_response->addStylesheet('reset');
    $sf_response->addStylesheet('grid');
    $sf_response->addStylesheet('styles');
    $sf_response->addStylesheet('jquery.wysiwyg.css');
    $sf_response->addStylesheet('tablesorter.css');
    $sf_response->addStylesheet('thickbox.css');
    $sf_response->addStylesheet('theme-blue.css');
    $sf_response->addStylesheet('jquery.wysiwyg.css');
    $sf_response->addStylesheet('tablesorter.css');
    $sf_response->addJavascript('jquery-1.3.2.min.js');
    $sf_response->addJavascript('jquery.tablesorter.min.js');
    $sf_response->addJavascript('jquery.tablesorter.pager.js');
    $sf_response->addJavascript('jquery.pstrength-min.1.2.js');
    $sf_response->addJavascript('thickbox');

    $this->sublinks = Array( Array("Principal", "ciudades" ), Array("Listado", "listCiudades" ) );
    $this->menuCurrent = "ciudades";
?>  