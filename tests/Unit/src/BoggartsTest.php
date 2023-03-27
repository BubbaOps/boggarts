<?php

use BubbaOps\Boggarts\Boggarts;

test('can make Boggarts', function () {
    $excise = new Boggarts(config('boggarts'));
    expect($excise)->toBeInstanceOf(Boggarts::class);
});

test('can assign text to Boggarts', function () {
    expect(excise()->text('boo far'))->toBeInstanceOf(\BubbaOps\Boggarts\Boggarts::class);
});

test('can Excise Boggarts Text ', function () {
    $origText = 'boo far';
    $result = excise()->text($origText)->finalize();
    expect($result)->toBeString()
        ->and($result)->toEqual($origText);
});

test('can Excise non_breaking_spaces Boggarts', function ($bogie) {
    $result = excise()->text($bogie['test_string'])->finalize();
    $target = '[] contains the test data.';
    expect($result)->not()->toEqual($bogie['test_string'])
        ->and($result)->toEqual($target);
})->with('non_breaking_spaces');

test('can Excise control_characters Boggarts', function ($bogie) {
    $result = excise()->text($bogie['test_string'])->finalize();
    $target = '[] contains the test data.';
    expect($result)->not()->toEqual($bogie['test_string'])
        ->and($result)->toEqual($target);
})->with('control_characters');

test('can Excise dangerous Boggarts', function ($bogie) {
    $result = excise()->text($bogie['test_string'])->finalize();
    $target = '[] contains the test data.';
    expect($result)->not()->toEqual($bogie['test_string'])
        ->and($result)->toEqual($target);
})->with('dangerous');

test('can Excise other Boggarts', function ($bogie) {
    $result = excise()->text($bogie['test_string'])->finalize();
    $target = '[] contains the test data.';
    expect($result)->not()->toEqual($bogie['test_string'])
        ->and($result)->toEqual($target);
})->with('others');

test('can Excise breaking_spaces Boggarts', function ($bogie) {
    $result = excise()->text($bogie['test_string'])->finalize();
    $target = '[] contains the test data.';
    expect($result)->not()->toEqual($bogie['test_string'])
        ->and($result)->toEqual($target);
})->with('breaking_spaces');
