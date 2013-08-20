<?php

/*オートローダー*/

function parame($param) { return $param; }

parame(function()
{
    if ($dir = opendir(dirname(__FILE__)))
    {
        while (($file = readdir($dir)) !== false) 
        {
            $pattern = '/function/';
            if (preg_match($pattern,$file)) 
            {
                locate_template(array($file),true,true);
            }
        } 
        closedir($dir);
    } else {
        return false;
    }
})->__invoke();

/*ユーザー登録*/
/*引数の中には配列をー*/

function wpp_register_user($userdata)
{

    $args = array(
        'user_login' => $userdata["user"],
        'user_pass' => $userdata["pass"],
        'user_email' => $userdata["mail"],
        'user_url' => '',
        'user_nicename' => $userdata["user"],
        'display_name' => $userdata["view_name"],
        'user_registered' => date('Y-m-d H:i:s'),
        'nickname' => $userdata["user"],
        'first_name' => '',
        'last_name' => '',
        'description' => $userdata["comment"],
        'rich_editing' => true,
        'comment_shortcuts' => false,
        'admin_color' => 'fresh',
        'use_ssl' => 0,
        'show_admin_bar_front' => false,
        'role' => get_option('default_role')
        );

    wp_insert_user($args);

}
