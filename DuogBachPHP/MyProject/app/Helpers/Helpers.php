<?php
if (!function_exists('duogbachdev')) {
    function duogbachdevHelper()
    {
        return "duogbachdev";
    }
}

if (!function_exists('showCategories')) {
    function showCategories($categories, $parent, $char)
    {
        foreach ($categories as $category) {
            if ($category["parent"] == $parent) {
                echo "<option value='" . $category["id"] . "' selected>" . $char . $category["name"] . "</option>";
                $new_parent = $category["id"];
                showCategories($categories, $new_parent, $char . "--- ");
            }
        }
    }
}
