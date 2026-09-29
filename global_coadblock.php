<?php
include("connection.php");
include("function/function.php");
  // home links
  $link_signup = "create/signup";
  $link_sigin = "create/signin";
  $link_contact = "index";
  $ALL_PLAN = all_plan();

  function about_data(){
    global $con;
    try {
        $sql = mysqli_query($con,"SELECT `id`, `SmallText`, `MainText`, `InfoDescription`, `AdminImage`, `Date` FROM `aboutsection` WHERE 1");
        if($sql) return mysqli_fetch_assoc($sql);
    } catch (Exception $e) {}
    return null;
  }
  function faq_section(){
    global $con;
    try {
        $sql = mysqli_query($con,"SELECT `id`, `FaqSmallText`, `MainText`, `Date` FROM `faq section` WHERE 1");
        if($sql) return mysqli_fetch_assoc($sql);
    } catch (Exception $e) {}
    return null;
  }
  function faq_section_boxes(){
    global $con;
    $row = array();
    try {
        $sql = mysqli_query($con,"SELECT `id`, `title_text`, `desc_text`, `date` FROM `faq_section_boxes` WHERE 1");
        if($sql) {
            while($fetch = mysqli_fetch_assoc($sql)){
                $row[] = $fetch;
            }
        }
    } catch (Exception $e) {}
    return $row;
  }
 ?>
