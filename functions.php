<?php
function clean_tags_from_unnecessary_attributes($string){
    //remove attributes from tag <> : style="*", font-size="*", trebuchet="*", background-color="*", trebuchet="*", droid="*"
    $pattern = "/( style| font-size| trebuchet | background-color| trebuchet| droid)[a-zA-Z0-9:;.,\"\-+=()\s]*\"/i";
    $replacement = '';
    return preg_replace($pattern, $replacement, $string);
}


?>