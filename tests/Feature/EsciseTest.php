<?php

test('Excising NULL gets an empty string', function () {
    $excise = new \BubbaOps\Boggarts\Excise();
    $result = $excise(null);
    expect($result)->not()->toBeNull();
    expect($result)->toBeString();
});

test('Facade NULL gets an empty string', function () {
    $result = \BubbaOps\Boggarts\Facades\Excise::clip(null);
    expect($result)->not()->toBeNull();
    expect($result)->toBeString();
});
