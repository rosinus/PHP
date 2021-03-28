<?php
function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}
 
echo get_members()[1];
 
?>
<!-- PHP의 버전이 5.4 이상이라면 위와 같은 방법으로도 가져올 수 있다. 좀 더 간단하다. -->