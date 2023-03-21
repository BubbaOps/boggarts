<?php

test('can make Excise service', function(){
    $excise = \Bubba\Boggarts\Excise::make(config: config());
    expect($excise)->toBeInstanceOf(\Bubba\Boggarts\Excise::class);
});

test('can assign text to Excise', function () {
    expect(excise()->text('boo far'))->toBeInstanceOf(\Bubba\Boggarts\Excise::class);
});

test('can Excise Text ', function () {
    $origText = 'boo far';
    $result = excise()->text($origText)->finalize();
    expect($result)->toBeString()
        ->and($result)->toEqual($origText);
});

test('can Excise non_breaking_spaces', function ($bogie) {
    $result = excise()->text($bogie['test_string'])->finalize();
    $target = '[] contains the test data.';
    expect($result)->not()->toEqual($bogie['test_string'])
        ->and($result)->toEqual($target);
})->with('non_breaking_spaces');

test('can Excise control_characters', function ($bogie) {
    $result = excise()->text($bogie['test_string'])->finalize();
    $target = '[] contains the test data.';
    expect($result)->not()->toEqual($bogie['test_string'])
        ->and($result)->toEqual($target);
})->with('control_characters');

test('can Excise dangerous', function ($bogie) {
    $result = excise()->text($bogie['test_string'])->finalize();
    $target = '[] contains the test data.';
    expect($result)->not()->toEqual($bogie['test_string'])
        ->and($result)->toEqual($target);
})->with('dangerous');

test('can Excise others', function ($bogie) {
    $result = excise()->text($bogie['test_string'])->finalize();
    $target = '[] contains the test data.';
    expect($result)->not()->toEqual($bogie['test_string'])
        ->and($result)->toEqual($target);
})->with('others');

test('can Excise breaking_spaces', function ($bogie) {
    $result = excise()->text($bogie['test_string'])->finalize();
    $target = '[] contains the test data.';
    expect($result)->not()->toEqual($bogie['test_string'])
        ->and($result)->toEqual($target);
})->with('breaking_spaces');
