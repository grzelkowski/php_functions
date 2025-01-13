<?php
function clean_tags_from_unnecessary_attributes($string){
    //remove attributes from tag <> : style="*", font-size="*", trebuchet="*", background-color="*", trebuchet="*", droid="*"
    $pattern = "/( style| font-size| trebuchet | background-color| trebuchet| droid)[a-zA-Z0-9:;.,\"\-+=()\s]*\"/i";
    $replacement = '';
    return preg_replace($pattern, $replacement, $string);
}


function generate_random_lorem_ipsum() {
    // predefined word lengths to choose from
    $word_lengths = [5, 10, 15, 20, 30, 40]; // list of possible text lengths
    
    // randomly select one length from the list
    $word_count = $word_lengths[array_rand($word_lengths)];
    
    // source lorem ipsum text
    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo erat vitae mi dictum suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce vel pharetra sem. Etiam et interdum urna, id consectetur purus. Sed nec erat dui. Proin semper pretium ex at consectetur. Quisque dolor mauris, pretium et molestie sollicitudin, iaculis ut nunc. Sed et euismod nibh, non mollis nisi. Aliquam dictum augue ut ultricies tincidunt. In interdum eu risus ut varius. Phasellus vitae sapien aliquet leo cursus condimentum ut eu tellus. Morbi porta tincidunt nulla sit amet faucibus. Morbi eu bibendum massa, ac commodo lorem. Nullam at orci id arcu imperdiet fermentum quis sed augue. Aenean et blandit turpis. Curabitur maximus faucibus risus mollis scelerisque. Nullam suscipit orci arcu, eget interdum tellus ornare id. Aliquam bibendum sit amet nisl vitae mollis. Etiam tempus pulvinar elementum.";
    
    // split the text into words and shuffle them
    $words = explode(' ', $lorem);
    shuffle($words);
    
    // return the generated text with the selected word count
    return implode(' ', array_slice($words, 0, $word_count));
}