<?php

it('can return the sum of two numbers', function () {
    $sum = 5 + 2;

    $user = createUser();
    expect($sum)->toBe(7);
});
