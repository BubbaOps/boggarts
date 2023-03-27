<?php

$pixies = boggartConfig();

function generate(array $boggies): array
{
    $dataset = [];
    foreach ($boggies as $bogie) {
        $dataset[$bogie['description']] = [$bogie];
    }

    return $dataset;
}
dataset('non_breaking_spaces', generate($pixies['bogies']['non_breaking_spaces']));
dataset('control_characters', generate($pixies['bogies']['control_characters']));
dataset('breaking_spaces', generate($pixies['bogies']['breaking_spaces']));
dataset('dangerous', generate($pixies['bogies']['dangerous']));
dataset('others', generate($pixies['bogies']['others']));
