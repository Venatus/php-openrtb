<?php
//Fake win notice endpoint, returns a random vast tag.
echo file_get_contents('./vast_tags/tag_'.rand(1,2).'.xml');