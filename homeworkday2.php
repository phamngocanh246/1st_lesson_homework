// Bài 1 : Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
<?php
echo strlen("Phạm Thị Ngọc Ánh");
?>

//Bài 2: Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
<?php
$str = "Đi học thực hành PHP";
echo str_word_count($str);
?>

//Bài 3: Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
<?php
echo strrev("Rất vui");
?>

//Bài 4: Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
<?php
echo strpos("Tớ yêu PHP, yêu tkw", "yêu");
?>

//Bài 5: Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
<?php
echo str_replace("không","rất","Tớ không muốn đi học");
?>

//Bài 6: Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
<?php
$str1 = "phamngocanh.php.vn";
$str2 = "phamngocanh";
if((strncmp($str1, $str2, "5"))===0){
   echo"Chuỗi bắt đầu bằng một chuỗi con khác!";
}
else{
   echo"Chuỗi không bắt đầu bằng một chuỗi con khác!";
}
echo"<br>";
?>

// Bài 7: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
<?php
$str1 = "xin chào PHP";
$str2 = strtoupper($str1);
echo $str2;
?>

//Bài 8: Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
<?php
$str = "LAM BAI TAP VE NHA";
echo strtolower($str);
?>

//Bài 9: Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
<?php
$str1 = "homework";
echo ucwords($str1);
?>

//Bài 10: Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
<?php
$str = "  Đội Sinh viên Tình nguyện VIS  ";
echo "[".$str."]";    //[  Đội Sinh viên Tình nguyện VIS  ];
echo "[".trim($str)."]";
?>

//Bài 11: Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
<?php
$str= "Vào VIS vui lắm mọi người ơi!";
echo ltrim($str);
?>

//Bài 12: Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
<?php
$str= "VIS chuẩn bị mở đơn TTV Gen 9 !";
echo rtrim($str, "!");
?>

//Bài 13: Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
<?php
$str = ("điền, đơn, đăng, ký, nhé");
print_r(explore(",", $str));
?>

//Bài 14: Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
<?php
    $str1 = array("1","2","3");
    $str2 = array("a");
    $str3 = array();
   
    echo " str1 is: '".implode("','",$a1)."'<br>";  
    echo " str2 is: '".implode("','",$a2)."'<br>";
    echo " str3 is: '".implode("','",$a3)."'<br>";
?>

//Bài 15: Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
<?php
$str= "VIS chờ cậu";
echo str_pad("$str", 20, "!", str_pad_both);
?>

//Bài 16: Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
<?php
$str1="Chao mung ban den voi";
    $char="Khoa IS";
    if(strrchr($str1,$char)===$char){
        echo"Chuỗi kết thúc bằng chuỗi con khác!";
    }
    else{
        echo"Chuỗi không kết thúc bằng chuỗi con khác!";
    }
    echo"<br>";
    ?>
//Bài 17: Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
<?php
$str1="Khoa IS tuyệt vời!";
$str2="t";
if(strstr($str1,$str2)){
    echo"Chuỗi có chứa một chuỗi con khác!";
}
else{
    echo"Chuỗi không chứa một chuỗi con khác!";
}
echo"<br>";
?>
//Bài 18: Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
<?php
$str1="!@#$%^&VISERS@#%%";
echo preg_replace("/\W+/","_",$str1);
echo"<br>";
?>

//Bài 19: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
<?php
$x=32;
if(is_int($x)){
 echo"Biến x thuộc kiểu số nguyên";
}
else{
 echo"Biến x không thuộc kiểu số nguyên";
}
echo"<br>";
?>

//Bài 20: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
<?php
$str1="phamngocanh202@gmail.com";
$str2="phamngocanh";
if(filter_var($str2, FILTER_VALIDATE_EMAIL)){
 echo"Email hợp lệ!";
}
else{
 echo"Email không hợp lệ!";
}
?>