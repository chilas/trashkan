<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of protectsec
 *
 * @author Ayeni Olusegun
 */
if(isset($_GET['signout'])){
    session::destroy();
    redirect(SITE_URL);
}
if (!(session::_isset('UNIQUE_ID_R') and session::_isset('UNIQUE_PHONE'))) {
    redirect(SITE_URL);
}

?>
