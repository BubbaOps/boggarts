<?php

test('can match others characters', function ($bogie) {
    expect($bogie['test_string'])->toContain(mb_chr($bogie['codepoint']));
})->with('others');
