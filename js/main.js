function deleteFun() {
    var x;
	var r=confirm("確定刪除!");
	if (r==true){
		x="./remove_acc.php";
	}
	else{
		x="./member_center.php";
	}
    document.getElementById("delete").href = x;
}