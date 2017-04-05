function validate() {
	var y1 = document.getElementById("y").value;
	var number_regexp = /^[+-]?\d+([,.]\d+)?(; [+-]?\d+([,.]\d+)?)*$/;
	if (!y1.match(number_regexp)) {
		alert("В поле y не число. Повторите ввод.");
		return false;
	}
	var y2 = Number(y1);
	if (y2 <= -3 || y2 >= 5) {
		alert("Значение y не принадлежит допустимому интервалу (-3;5). Повторите ввод.");
		return false;
	}
	return true;
}
