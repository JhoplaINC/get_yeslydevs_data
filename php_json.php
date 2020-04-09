<?php

$content = file_get_contents('https://afyrus.github.io/YeslyDevs/data/main.json');

$data = json_decode($content, true);

# // VARIABLES DEL PROYECTO - DATOS
$project_name = $data['project']['name'];
$project_desc = $data['project']['desc'];
$project_link = $data['project']['link'];

# // VARIABLES DEL PROYECTO - REDES SOCIALES

    # // DATOS FB
$project_social_fb = $data['social']['fb']['page_name'];
$project_social_fb = $data['social']['fb']['page_link'];

    # // DATOS IG
$project_social_ig = $data['social']['ig']['page_name'];
$project_social_ig = $data['social']['ig']['page_link'];

    # // DATOS YT
$project_social_yt = $data['social']['yt']['page_name'];
$project_social_yt = $data['social']['yt']['page_link'];

echo $project_name;
