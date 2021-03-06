<?php
function routes_ajaxchat()
{
  $routes[] = array(
    '_uri'  => '/^ajaxchat\/view.html$/i',
    'do'    => 'view'
  );
  
   $routes[] = array(
    '_uri'  => '/^ajaxchat\/get_userlist$/i',
    'do'    => 'get_userlist'
  ); 
  
  $routes[] = array(
    '_uri'  => '/^ajaxchat\/send_message$/i',
    'do'    => 'send_message'
  ); 
  
   $routes[] = array(
    '_uri'  => '/^ajaxchat\/get_messages$/i',
    'do'    => 'get_messages'
  );  
  
  $routes[] = array(
    '_uri'  => '/^ajaxchat\/load_new$/i',
    'do'    => 'load_new'
  );   
  
  $routes[] = array(
    '_uri'  => '/^ajaxchat\/get_help$/i',
    'do'    => 'get_help'
  );     

  $routes[] = array(
    '_uri'  => '/^ajaxchat\/get_dialogs$/i',
    'do'    => 'get_dialogs'
  );   
  
  $routes[] = array(
    '_uri'  => '/^ajaxchat\/get_converstation$/i',
    'do'    => 'get_converstation'
  ); 
  return $routes;
}
?>