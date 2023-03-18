<?php

test('can match dangerous spaces', function ($bogie) {
    expect($bogie['test_string'])->toContain(mb_chr($bogie['codepoint']));
})->with('dangerous');
