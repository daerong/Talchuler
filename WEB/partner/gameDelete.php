<?
include('./include.php');

$sql="delete from game where g_idx='".$_GET['g_idx']."'";
mysql_query($sql);

//�̹��� ��������� filename�ҷ�����
$sql="select filename from gameImage where g_idx='".$_GET['g_idx']."'";
$q=mysql_query($sql);
$data=mysql_fetch_array($q);

//�̹��������
rename("../partner/gameImage/".$data[0].".jpg", "../partner/albumTrash/".$data[0].".jpg");
?>

<script>
alert("������ �Ϸ�Ǿ����ϴ�.");
location.href="./gameinfo.php??refresh=1";
</script>