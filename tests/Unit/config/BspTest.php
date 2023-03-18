<?php

test('can match breaking_spaces', function ($bogie) {
    expect($bogie['test_string'])->toContain(mb_chr($bogie['codepoint']));
})->with('breaking_spaces');
