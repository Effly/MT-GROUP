<?php 
$items = [
	"Category 1" => [
		"Subcategory 11" => [
			"SubSubCat 111" => [
				"Item1",
				"Item2" => [
                    "Item3",
                ],
            ]
        ]
    ],
"Category 2" => [
	"Item3"
],
"Item4",
];
function tree($array, $tab = '', $result = '')
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result .= "$tab $key <br>";
            $result .= tree($value, $tab . str_repeat('&nbsp;', 2));
        } else {
            $result .= "$tab $value <br>";
        }
    }
    return $result;
}
?>