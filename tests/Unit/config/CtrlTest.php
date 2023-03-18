<?php

test('can match control characters', function ($bogie) {
    expect($bogie['test_string'])->toContain(mb_chr($bogie['codepoint']));
})->with('control_characters');
