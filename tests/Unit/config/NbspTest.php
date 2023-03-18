<?php

test('can match non-breaking spaces', function ($bogie) {
    expect($bogie['test_string'])->toContain(mb_chr($bogie['codepoint']));
})->with('non_breaking_spaces');
