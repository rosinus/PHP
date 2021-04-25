<?php
// i는 패턴 매칭을 할 때 대소문자를 구분하지 않도록 한다.
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}
?>