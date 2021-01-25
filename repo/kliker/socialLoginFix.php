<?php

//Set custom roles for new users
function oa_social_login_set_new_user_role ($user_role)
{
  //This is an example for a custom setting with one role
  $user_role = 'klikeras';
   
  //This is an example for a custom setting with two roles
  $user_role = 'roditelj';
 
  //The new user will be created with this role
  return $user_role;
}
 
//This filter is applied to the roles of new users
add_filter('oa_social_login_filter_new_user_role', 'oa_social_login_set_new_user_role');

//Set custom roles for new users
function oa_social_login_set_new_user_role_url_based ($user_role)
{
  //Read the current url
  $current_url = oa_social_login_get_current_url();
	
  if (strpos ($current_url, '/klikeras-registracija/') !== false)
  {
    return 'klikeras';
  }
   
  //For example: http://www.your-website.com/candidate-signup/
  if (strpos ($current_url, '/roditelj-registracija/') !== false)
  {
    return 'roditelj';
  }
   
  //Default
  return $user_role;
}
 
//This filter is applied to the roles of new users
add_filter('oa_social_login_filter_new_user_role', 'oa_social_login_set_new_user_role_url_based');
