<?php
if (!function_exists('duogbachdev')) {
    function duogbachdevHelper()
    {
        return "duogbachdev";
    }
}

if (!function_exists('showCategories')) {
    function showCategories($categories, $parent, $char, $parent_id_child)
    {
        foreach ($categories as $category) {
            if ($category["parent"] == $parent) {
                if ($category["id"] == $parent_id_child) {
                    echo "<option value='" . $category["id"] . "' selected>" . $char . $category["name"] . "</option>";
                } else {
                    echo "<option value='" . $category["id"] . "' >" . $char . $category["name"] . "</option>";
                }
                $new_parent = $category["id"];
                showCategories($categories, $new_parent, $char . "--- ", $parent_id_child);
            }
        }
    }
}
