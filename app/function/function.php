
<?php

function stripUnicode($str)
{
    if (!$str) {
        return false;
    }

    $unicode = [
        'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
        'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'd' => 'đ',
        'D' => 'Đ',
        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'i' => 'í|ì|ỉ|ĩ|ị',
        'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
        'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
        'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
    ];
    foreach ($unicode as $khongdau => $codau) {
        $arr = explode("|", $codau);
        $str = str_replace($arr, $khongdau, $str);
    }
    return $str;
}

function changeTitle($str)
{
    $str = trim($str);
    if ("" == $str) {
        return "";
    }

    $str = str_replace('"', '', $str);
    $str = str_replace("'", '', $str);
    $str = stripUnicode($str);
    $str = mb_convert_case($str, MB_CASE_TITLE, 'utf-8');

    // MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
    $str = str_replace(' ', '-', $str);
    return $str;
}

function cat_parent($data, $parent = 0, $str = "-", $select = 0)
{
    foreach ($data as $key => $value) {
        $id   = $value["id"];
        $name = $value["name"];
        if ($value["parent_id"] == $parent) {
            if (0 != $select && $select == $id) {
                echo "<option value='$id' selected='selected'>$str $name</option>";
            } else {
                echo "<option value='$id'>$str $name</option>";
            }
            cat_parent($data, $id, $str . "-", $select);
        }
    }
}

function showCategories($categories, $id, $name)
{
    $arCount = DB::table('cats')->where('parent_id', $id)->get()->count();
    if ($arCount > 0) {
        echo '<ul class="submenu"><div class="submenu_padding">';
        foreach ($categories as $key => $item) {
            $url = str_slug($name) . '/' . str_slug($item['name']) . '-' . $item['id'];
            if ($item['parent_id'] == $id) {
                echo '<li class=" menu"><a class="menu" href="../' . $url . '">  <span class="menu_title">' . $item['name'] . '</span></a>';
                showCategories($categories, $item['id'], $name);
                echo '</li>';
            }
        }
        echo '</div></ul>';
    } else {
        $right = '';
    }
}

function showCat_header($id, $nameCat)
{
    $arCount = DB::table('cats')->where('parent_id', $id)->get()->count();
    if ($arCount > 0) {
        echo '<ul>';
        $categories = DB::table('cats')->where('parent_id', $id)->get()->toArray();
        $array      = json_decode(json_encode($categories), true);
        foreach ($array as $key => $item) {
            $url = str_slug($nameCat) . '/' . str_slug($item['name']) . '-' . $item['id'];
            if ($item['parent_id'] == $id) {
                echo '<li><a class="sub-menu" href="../' . $url . '"> <div>' . $item['name'] . '</div></a>';
                showCategories($categories, $item['id'], $item['name']);
                echo '</li>';
            }
        }
        echo '</ul>';
    } else {
        $right = '';
    }
}

function leftbar($id, $name)
{
    $categories = DB::table('cats')->where('parent_id', $id)->take(6)->get()->toArray();
    $array      = json_decode(json_encode($categories), true);

    foreach ($array as $key => $item) {
        $url = str_slug($name) . '/' . str_slug($item['name']) . '-' . $item['id'];
        if ($item['parent_id'] == $id) {
            echo '<li><a href="/' . $url . '">' . $item['name'] . '</a></li>';
        }
    }
}

function getImages($images)
{
    if ($images) {
        if (file_exists('/storage/' . $images)) {
            $picture = asset(Storage::url($images));
        }
    }

    $picture = asset('/templates/admin/images/image.png');

    return $picture;
}

function getImagesList($images)
{
    if ($images) {
        if (file_exists(public_path('images/') . $images)) {
            return "<img class='image_slide' src='" . '/images/' . $images . "'>";
        }
    }

    return 'Fails images';
}
