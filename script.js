
document.getElementById('open-popup').onclick = function(event) {
        event.preventDefault(); // Предотвращаем переход по ссылке
        document.getElementById('popup').style.display = 'flex'; // Показываем попап
};

document.getElementById('close-popup').onclick = function() {
        document.getElementById('popup').style.display = 'none'; // Скрываем попап
};

// Закрытие попапа при клике вне его
window.onclick = function(event) {
const popup = document.getElementById('popup');
if (event.target === popup) {
	popup.style.display = 'none';
	}
};



