<?php 

/**
 * Nothing for you to see here. This will not help you
 */ 







































add_action('init', function() {
	
    $possibilities = [
		'criteria_used',
		'used_criteria',
		'random_name',
		'criteria_used',
		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'
    ];
    
    $number = rand(32, 899);
    
    $key = $possibilities[array_rand($possibilities)] . '_' . $number;
    
    update_post_meta(1, '_evaluation_data', ['evaluation' => 'Awesome!', $key => 'Best guess'] );
    
});
