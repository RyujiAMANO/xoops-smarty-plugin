<?php

function smarty_function_xoops_avatar($params, &$smarty)
{
    $user = $params['user'];
    $style = isset($params['style']) ? $params['style'] : '';

    if($user->get('user_avatar') != "blank.gif"){
        $tag = sprintf('<img src="%s/%s" alt="Avatar" title="Avatar" style="%s" />',
            XOOPS_UPLOAD_URL,
            $user->getShow('user_avatar'),
            $style
        );
    }else{
        $tag = sprintf('<img src="%s/modules/user/images/no_avatar.gif" alt="No Avatar" title="No Avatar" style="%s" />',
            XOOPS_URL,
            $style
        );
    }
    echo $tag;
}
