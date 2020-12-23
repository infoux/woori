<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<h2>
    <?php echo $bo_subject ?>

        <a href="<?php echo get_pretty_url($bo_table); ?>">
            <i class='bx bx-list-plus'></i>더보기</a>
    </h2>
    <ul>
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <li>
            <?php


            echo "<a href=\"".$list[$i]['href']."\">";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];



            echo "<i>".$list[$i]['datetime']."</i>";
            echo "</a>";

            ?>
        </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>